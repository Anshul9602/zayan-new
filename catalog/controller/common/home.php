<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Home
 *
 * Can be called from $this->load->controller('common/home');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Home extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return void
	 */
	public function index(): void {
		$description = $this->config->get('config_description');
		$language_id = $this->config->get('config_language_id');

		if (isset($description[$language_id])) {
			$this->document->setTitle($description[$language_id]['meta_title']);
			$this->document->setDescription($description[$language_id]['meta_description']);
			$this->document->setKeywords($description[$language_id]['meta_keyword']);
		}


			// Banner
			$this->load->model('design/banner');

			// Image
			$this->load->model('tool/image');
	
			$data['banners'] = [];
	
			$results = $this->model_design_banner->getBanner(9);


			foreach ($results as $result) {
				$test = is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'));
				
				if (is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'))) {
					$data['banners'][] = [
						'title' => explode('\n', $result['title'])[0],
						'description' => explode('\n', $result['title'])[1],
						'link'  => $result['link'],
						'image' => $this->model_tool_image->resize(html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'), '2880', '1380')
					];
				}
			}

			$data['banners2'] = [];
	
			$results = $this->model_design_banner->getBanner(10);
	
			foreach ($results as $result) {
				if (is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'))) {
					$data['banners2'][] = [
						'title' => $result['title'],
						'link'  => $result['link'],
						'image' => $this->model_tool_image->resize(html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'), '912', '704')
					];
				}
			}
		
			$data['banners3'] = [];
	
			$results = $this->model_design_banner->getBanner(12);
	
			foreach ($results as $result) {
				if (is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'))) {
					$data['banners3'][] = [
						'title' => $result['title'],
						'link'  => $result['link'],
						'image' => $this->model_tool_image->resize(html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'), '912', '704')
					];
				}
			}
		
			
		// Product
		$this->load->model('catalog/category');
		$this->load->model('catalog/product');

		// Build featured tabs with specific category products
		$data['featured_tabs'] = [];

		$tabs = [
			[
				'name' => 'New Arrivals',
				'path_id' => '61_74', // for DOM id use
				'category_id' => 74
			],
			
			[
				'name' => 'Trending',
				'path_id' => '60_68',
				'category_id' => 68
			]
		];

		foreach ($tabs as $tab) {
			$filter_data = [
				'filter_category_id' => $tab['category_id'],
				'filter_sub_category' => true,
				'sort' => 'p.sort_order',
				'order' => 'ASC',
				'start' => 0,
				'limit' => 12
			];

			$results = $this->model_catalog_product->getProducts($filter_data);

			$products = [];

			// Image
            $this->load->model('tool/image');

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize(html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'), (int)$this->config->get('config_image_thumb_width'), (int)$this->config->get('config_image_thumb_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', (int)$this->config->get('config_image_thumb_width'), (int)$this->config->get('config_image_thumb_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				$product_data = [
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => oc_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('config_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => isset($result['rating']) ? (int)$result['rating'] : 0,
					'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'])
				];

				$products[] =$product_data;
			}

			$data['featured_tabs'][] = [
				'name' => $tab['name'],
				'path_id' => $tab['path_id'],
				'category_id' => $tab['category_id'],
				'products' => $products
			];
		}

		// Shop This Look: first 3 products from collection 60_67 (category_id 67)
		$data['shop_look_products'] = [];
		$shop_filter = [
			'filter_category_id' => 67,
			'filter_sub_category' => true,
			'sort' => 'p.sort_order',
			'order' => 'ASC',
			'start' => 0,
			'limit' => 3
		];

		$shop_results = $this->model_catalog_product->getProducts($shop_filter);
		$data['shop_total'] = $this->model_catalog_product->getTotalProducts($shop_filter);

		foreach ($shop_results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize(html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'), (int)$this->config->get('config_image_thumb_width'), (int)$this->config->get('config_image_thumb_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', (int)$this->config->get('config_image_thumb_width'), (int)$this->config->get('config_image_thumb_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}

			if ((float)$result['special']) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$special = false;
			}

			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
			} else {
				$tax = false;
			}
			
			$product_data = [
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => oc_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('config_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'tax'         => $tax,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => isset($result['rating']) ? (int)$result['rating'] : 0,
				'href'        => $this->url->link('product/product', 'language=' . $this->config->get('config_language') . '&product_id=' . $result['product_id'])
			];

			$data['shop_look_products'][] = $product_data;
		}

		// echo '<pre>';
		// print_r($products);
		// echo '</pre>';
		// exit;
		$data['logged'] = $this->customer->isLogged();
		$data['cart_add'] = $this->url->link('checkout/cart.add', 'language=' . $this->config->get('config_language'));
		$data['wishlist_add'] = $this->url->link('account/wishlist.add', 'language=' . $this->config->get('config_language'));
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
