<?php
class ControllerProductCategorynew extends Controller
{
	public function index()
	{
		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$category_id = 0;

		if (isset($this->request->get['path'])) {
			$p = (string)$this->request->get['path'];

			if (strpos($p, '_') !== false) {
				$data['logged'] = $this->customer->isLogged();

				$parts = explode('_', $p);
				$category_id = (int)array_pop($parts);
			} else {
				$category_id = (int)$this->request->get['path'];
			}
		}

		if (!$category_id) {
			$this->response->redirect($this->url->link('common/home'));
			return;
		}

		$category_info = $this->model_catalog_category->getCategory($category_id);

		if ($category_info) {
			$this->document->setTitle($category_info['meta_title']);
			$this->document->setDescription($category_info['meta_description']);
			$this->document->setKeywords($category_info['meta_keyword']);

			$data['heading_title'] = $category_info['name'];

			$data['text_refine'] = $this->language->get('text_refine');
			$data['text_empty'] = $this->language->get('text_empty');
			$data['text_quantity'] = $this->language->get('text_quantity');
			$data['text_manufacturer'] = $this->language->get('text_manufacturer');
			$data['text_model'] = $this->language->get('text_model');
			$data['text_price'] = $this->language->get('text_price');
			$data['text_tax'] = $this->language->get('text_tax');
			$data['text_points'] = $this->language->get('text_points');
			$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
			$data['text_sort'] = $this->language->get('text_sort');
			$data['text_limit'] = $this->language->get('text_limit');

			$data['button_cart'] = $this->language->get('button_cart');
			$data['button_wishlist'] = $this->language->get('button_wishlist');
			$data['button_compare'] = $this->language->get('button_compare');
			$data['button_continue'] = $this->language->get('button_continue');
			$data['button_list'] = $this->language->get('button_list');
			$data['button_grid'] = $this->language->get('button_grid');

			$data['logged'] = $this->customer->isLogged();

			// Set the last category breadcrumb
			$data['breadcrumbs'][] = array(
				'text' => $category_info['name'],
				'href' => $this->url->link('product/categorynew', 'path=' . $this->request->get['path'])
			);

			if ($category_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($category_info['image'], 1400, 561);
			} else {
				$data['thumb'] = '';
			}

			$data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');
			$data['compare'] = $this->url->link('product/compare');

			$url = '';

			$data['categories'] = array();

			$results = $this->model_catalog_category->getCategories($category_id);

			foreach ($results as $result) {
				$filter_data = array(
					'filter_category_id'  => $result['category_id'],
					'filter_sub_category' => true
				);

				if ($result['image']) {
					$image1 = $this->model_tool_image->resize($result['image'], 300, 300);
				} else {
					$image1 = $this->model_tool_image->resize('placeholder.png', $this->config->get($this->config->get('config_theme') . '_image_product_width'), $this->config->get($this->config->get('config_theme') . '_image_product_height'));
				}

				$data['categories'][] = array(
					'name' => $result['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
					'href' => $this->url->link('product/categorynew', 'path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url),
					'image' => $image1
				);
			}

			$data['products'] = array();
			$data['images'] = array();

			$key = '';
			$key2 = 'XXXX';

			switch ((int)$category_id) {
				case 80:
					$key = 'RG';
					break;
				case 83:
					$key = 'BG';
					break;
				case 85:
					$key = 'PD';
					break;
				case 86:
					$key = 'NL';
					break;
				case 82:
					$key = 'ER';
					break;
				case 84:
					$key = 'BL';
					break;
				case 89:
				case 107:
					$key = 'ER';
					break;
				case 106:
					$key = 'PD';
					break;
				case 95:
					$key = 'TC1';
					$key2 = 'TC2';
					break;
			}

			$results = array();

			if ($key !== '') {
				$results = $this->model_catalog_product->getProductsKey($key, $key2, array());
			}

			if (!is_array($results)) {
				$results = array();
			}

			if (isset($this->session->data['wishlist_items'])) {
				$wishlist_items1 = $this->session->data['wishlist_items'];
			} else {
				$wishlist_items1 = null;
			}

			foreach ($results as $result) {
				if (!$result || !is_array($result) || empty($result['product_id'])) {
					continue;
				}

				$wish_price = '';
				$wish_sprice = '';
				$wet = '';
				$discount_percentage = false;
				$price = false;
				$special = false;

				if (!empty($result['image'])) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get($this->config->get('config_theme') . '_image_product_width'), $this->config->get($this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get($this->config->get('config_theme') . '_image_product_width'), $this->config->get($this->config->get('config_theme') . '_image_product_height'));
				}

				$pid = (int)$result['product_id'];

				$data['images'][$pid] = array();

				$results_img = $this->model_catalog_product->getProductImages($pid);
				$first = true;

				foreach ($results_img as $result_img) {
					if ($first && !empty($result_img['image'])) {
						$data['images'][$pid]['popup'] = $this->model_tool_image->resize($result_img['image'], $this->config->get($this->config->get('config_theme') . '_image_product_width'), $this->config->get($this->config->get('config_theme') . '_image_product_height'));
						$first = false;
					}
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$wish_price = $price;
				} else {
					$wish_price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$price = false;
				}

				if ((float)$result['special']) {
					$wish_sprice = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$special = $wish_sprice;
						$price_raw = (float)$result['price'];
						$special_raw = (float)$result['special'];
						$discount_percentage = $price_raw > 0 ? round((($price_raw - $special_raw) / $price_raw) * 100) : false;
					} else {
						$special = false;
						$discount_percentage = false;
					}
				} else {
					$wish_sprice = '';
					$special = false;
					$discount_percentage = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				$style_no = isset($result['model']) ? $result['model'] : '';
				$metal_purity = isset($result['upc']) ? $result['upc'] : '';
				$design_no = isset($result['sku']) ? $result['sku'] : '';

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$attribute_groups = $this->model_catalog_product->getProductAttributes($pid);

				if (is_array($attribute_groups)) {
					foreach ($attribute_groups as $attr) {
						if (isset($attr['name']) && $attr['name'] == 'Stone details' && !empty($attr['attribute'])) {
							foreach ($attr['attribute'] as $attribute) {
								$wet = $attribute['text'];
							}
						}
					}
				}

				$options = array();

				foreach ($this->model_catalog_product->getProductOptions($pid) as $option) {
					$product_option_value_data = array();

					if (empty($option['product_option_value']) || !is_array($option['product_option_value'])) {
						continue;
					}

					foreach ($option['product_option_value'] as $option_value) {
						if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
							$product_option_value_data[] = array(
								'product_option_value_id' => $option_value['product_option_value_id'],
								'option_value_id'         => $option_value['option_value_id'],
								'name'                    => $option_value['name'],
								'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
								'price'                   => false,
								'price_prefix'            => $option_value['price_prefix']
							);
						}
					}

					$options[] = array(
						'product_option_id'    => $option['product_option_id'],
						'product_option_value' => $product_option_value_data,
						'option_id'            => $option['option_id'],
						'name'                 => $option['name'],
						'type'                 => $option['type'],
						'value'                => $option['value'],
						'required'             => $option['required']
					);
				}

				$filter_ids = array();
				$product_filters = $this->model_catalog_product->getProductFilters($pid);

				if (is_array($product_filters)) {
					foreach ($product_filters as $group_filters) {
						if (is_array($group_filters)) {
							foreach ($group_filters as $fid) {
								$filter_ids[] = (string)$fid;
							}
						}
					}
				}

				$product_in_wishlist = false;

				if ($wishlist_items1 !== null) {
					if (is_array($wishlist_items1)) {
						$wishlist_items1_array = $wishlist_items1;
					} elseif (is_string($wishlist_items1) && $wishlist_items1 !== '') {
						$wishlist_items1_array = json_decode($wishlist_items1, true);
					} else {
						$wishlist_items1_array = array();
					}

					if (!is_array($wishlist_items1_array)) {
						$wishlist_items1_array = array();
					}

					foreach ($wishlist_items1_array as $item) {
						if (is_array($item) && isset($item['productid']) && (string)$item['productid'] === (string)$pid) {
							$product_in_wishlist = true;
							break;
						}
					}
				}

				$data['products'][] = array(
					'product_id'          => $pid,
					'thumb'               => $image,
					'filter_id'           => $filter_ids,
					'name'                => $result['name'],
					'description'         => utf8_substr(strip_tags(html_entity_decode(isset($result['description']) ? $result['description'] : '', ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
					'model'               => $style_no,
					'option'              => $options,
					'price'               => $price,
					'wet'                 => $wet,
					'wish_price'          => $wish_price,
					'discount_percentage' => $discount_percentage,
					'wish_special'        => $wish_sprice,
					'in_wishlist'         => $product_in_wishlist,
					'special'             => $special,
					'style_no'            => $style_no,
					'metal_purity'        => $metal_purity,
					'design_no'           => $design_no,
					'tax'                 => $tax,
					'minimum'             => (!empty($result['minimum']) && $result['minimum'] > 0) ? $result['minimum'] : 1,
					'rating'              => isset($result['rating']) ? $result['rating'] : 0,
					'href'                => $this->url->link('product/product', 'path=' . $this->request->get['path'] . '&product_id=' . $pid . $url)
				);
			}

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('product/categorynew', $data));
		} else {
			$url = '';

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/categorynew', $url)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['button_continue'] = $this->language->get('button_continue');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}
