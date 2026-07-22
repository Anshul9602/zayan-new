<?php
class ControllerCommonDiamondsdemo extends Controller
{
	public function index()
	{
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}


		//banner-top
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['bannerstop'] = array();

		$results = $this->model_design_banner->getBanner(13);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['bannerstop'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1410', '470')
				);
			}
		}

		//diamond fashion categories
		$this->load->model('catalog/category');
		$this->load->model('catalog/product');
		$data['categories1'] = array();
		$children = $this->model_catalog_category->getCategories('68');
		foreach ($children as $category) {
			$catres = $this->model_catalog_category->getCategory($category['category_id']);
			$data['categories1'][] = array(
				'name'     => $catres['name'],
				'children' => $children,
				'description' => html_entity_decode($catres['description']),
				'image' => $catres['image'],
				'column'   => $catres['column'] ? $catres['column'] : 1,
				'href'     => $this->url->link('product/category', 'path=' . $catres['category_id']),
				'id' => $catres['category_id']
			);
		}

		//most wanted design

		$data['categories2'] = array();
		$children = $this->model_catalog_category->getCategories('74');
		foreach ($children as $category) {
			$catres = $this->model_catalog_category->getCategory($category['category_id']);
			$data['categories2'][] = array(
				'name'     => $catres['name'],
				'children' => $children,
				'description' => html_entity_decode($catres['description']),
				'image' => $catres['image'],
				'column'   => $catres['column'] ? $catres['column'] : 1,
				'href'     => $this->url->link('product/category', 'path=' . $catres['category_id']),
				'id' => $catres['category_id']
			);
		}

		//shaded of gold
		$data['bannersshades'] = array();

		$results = $this->model_design_banner->getBanner(12);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['bannersshades'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1410', '470')
				);
			}
		}

		//banner-gaurantee
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['bannersGuarantee'] = array();

		$results = $this->model_design_banner->getBanner(9);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['bannersGuarantee'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1410', '470')
				);
			}
		}

		// diamond products

		$data['products'] = array();

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$filter_data = array(
			'filter_category_id' => '89',
			'start' => '0',
			'limit' => '100'
		);

		$results = $this->model_catalog_product->getProducts($filter_data);


		foreach ($results as $result) {

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





			$product_info = $this->model_catalog_product->getProduct($result['product_id']);

			$data['options'] = array();

			foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$oprice = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$oprice = false;
						}

						$product_option_value_data[] = array(
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $oprice,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$data['options'][] = array(
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}






			$data['products'][$result['model']] = array(
				'product_id'  => $result['product_id'],
				'model' => $result['model'],
				'name'        => $result['name'],
				'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'tax'         => $tax,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product' . '&product_id=' . $result['product_id']),
				'upc' => $result['upc'],
				'ean' => $result['ean'],
				'jan' => $result['jan'],
				'isbn' => $result['isbn'],
				'mpn' => $result['mpn'],
				'options' => $data['options']
			);
		}

		//cart products
		$data['cart_products'] = array();

		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			$product_total = 0;

			foreach ($products as $product_2) {
				if ($product_2['product_id'] == $product['product_id']) {
					$product_total += $product_2['quantity'];
				}
			}

			if ($product['minimum'] > $product_total) {
				$data['error_warning'] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
			}

			if ($product['image']) {
				$image = $this->model_tool_image->resize($product['image'], $this->config->get($this->config->get('config_theme') . '_image_cart_width'), $this->config->get($this->config->get('config_theme') . '_image_cart_height'));
			} else {
				$image = '';
			}

			$option_data = array();

			foreach ($product['option'] as $option) {
				if ($option['type'] != 'file') {
					$value = $option['value'];
				} else {
					$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

					if ($upload_info) {
						$value = $upload_info['name'];
					} else {
						$value = '';
					}
				}

				$option_data[] = array(
					'name'  => $option['name'],
					'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
				);
			}

			// Display prices
			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$unit_price = $this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax'));

				$price = $this->currency->format($unit_price, $this->session->data['currency']);
				$total = $this->currency->format($unit_price * $product['quantity'], $this->session->data['currency']);
			} else {
				$price = false;
				$total = false;
			}

			$recurring = '';

			if ($product['recurring']) {
				$frequencies = array(
					'day'        => $this->language->get('text_day'),
					'week'       => $this->language->get('text_week'),
					'semi_month' => $this->language->get('text_semi_month'),
					'month'      => $this->language->get('text_month'),
					'year'       => $this->language->get('text_year'),
				);

				if ($product['recurring']['trial']) {
					$recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
				}

				if ($product['recurring']['duration']) {
					$recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
				} else {
					$recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
				}
			}

			$data['cart_products'][] = array(
				'product_id' => $product['product_id'],
				'cart_id'   => $product['cart_id'],
				'thumb'     => $image,
				'name'      => $product['name'],
				'model'     => $product['model'],
				'option'    => $option_data,
				'recurring' => $recurring,
				'quantity'  => $product['quantity'],
				'stock'     => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
				'reward'    => ($product['reward'] ? sprintf($this->language->get('text_points'), $product['reward']) : ''),
				'price'     => $price,
				'total'     => $total,
				'href'      => $this->url->link('product/product', 'product_id=' . $product['product_id'])
			);
		}

		/////


		$data['isUserLogged'] = $this->customer->isLogged();
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/diamondsdemo', $data));
	}

	public function requestPrice()
	{
		$json = array();

		// Determine customer name / email
		if ($this->customer->isLogged()) {
			$email = $this->customer->getEmail();
			$name  = trim($this->customer->getFirstName() . ' ' . $this->customer->getLastName());
		} else {
			$email = isset($this->request->post['email']) ? trim($this->request->post['email']) : '';
			$name  = isset($this->request->post['name']) ? trim($this->request->post['name']) : '';
		}

		if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$json['error'] = 'Please provide a valid email address.';
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
			return;
		}

		if (!$name) {
			$name = 'Customer';
		}

		$products = $this->cart->getProducts();

		if (!$products) {
			$json['error'] = 'Your buying list is empty.';
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
			return;
		}

		$store_email = $this->config->get('config_email');
		if (!$store_email || !filter_var($store_email, FILTER_VALIDATE_EMAIL)) {
			$store_email = 'info@zaynjewels.com';
		}

		$store_name = html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8');
		if (!$store_name) {
			$store_name = 'Zayn Jewels';
		}

		// Build product details table
		$rows = '';
		$i = 0;

		foreach ($products as $product) {
			$i++;

			$pieces = '';
			$size_values = array();

			foreach ($product['option'] as $option) {
				$opt_name = strtolower(trim($option['name']));
				if ($opt_name == 'diamond by pieces') {
					$pieces = $option['value'];
				} elseif (strtolower($option['value']) != 'default' && $option['value'] !== '') {
					$size_values[] = $option['value'];
				}
			}

			if ($pieces !== '' && $pieces !== '0') {
				$quantity = $pieces . ' Pieces';
			} else {
				$quantity = rtrim(rtrim(number_format($product['quantity'] / 10000, 3, '.', ''), '0'), '.') . ' Carats';
			}

			$rows .= '<tr>';
			$rows .= '<td style="padding:8px; border:1px solid #ddd;">' . $i . '</td>';
			$rows .= '<td style="padding:8px; border:1px solid #ddd;">' . htmlspecialchars($product['name']) . '</td>';
			$rows .= '<td style="padding:8px; border:1px solid #ddd;">' . htmlspecialchars(implode(', ', $size_values)) . '</td>';
			$rows .= '<td style="padding:8px; border:1px solid #ddd;">' . htmlspecialchars($quantity) . '</td>';
			$rows .= '</tr>';
		}

		$table  = '<table style="border-collapse:collapse; width:100%; max-width:600px;">';
		$table .= '<tr><th style="padding:8px; border:1px solid #ddd; text-align:left;">S.No</th><th style="padding:8px; border:1px solid #ddd; text-align:left;">Diamond</th><th style="padding:8px; border:1px solid #ddd; text-align:left;">Size</th><th style="padding:8px; border:1px solid #ddd; text-align:left;">Quantity</th></tr>';
		$table .= $rows;
		$table .= '</table>';

		// Customer email body
		$customer_html  = '<html><body>';
		$customer_html .= '<p>Dear ' . htmlspecialchars($name) . ',</p>';
		$customer_html .= '<p>Thank you for your price request with ' . htmlspecialchars($store_name) . '. We have received the following details and our team will get back to you shortly with pricing.</p>';
		$customer_html .= $table;
		$customer_html .= '<p>If you have any questions, reply to this email or contact us at ' . htmlspecialchars($store_email) . '.</p>';
		$customer_html .= '<p>Regards,<br/>' . htmlspecialchars($store_name) . '</p>';
		$customer_html .= '</body></html>';

		// Store email body
		$store_html  = '<html><body>';
		$store_html .= '<p><strong>New Price Request</strong></p>';
		$store_html .= '<p>Customer Name: ' . htmlspecialchars($name) . '<br/>';
		$store_html .= 'Customer Email: ' . htmlspecialchars($email) . '</p>';
		$store_html .= '<p>Requested diamond details:</p>';
		$store_html .= $table;
		$store_html .= '<p>Please reply to the customer at ' . htmlspecialchars($email) . '.</p>';
		$store_html .= '</body></html>';

		$customer_subject = 'Your Price Request - ' . $store_name;
		$store_subject = 'New Price Request from ' . $name . ' - ' . $store_name;

		$customer_sent = false;
		$store_sent = false;
		$error_message = '';

		try {
			// 1) Email to customer
			$mail = new Mail();
			$mail->protocol = $this->config->get('config_mail_protocol');
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($email);
			$mail->setFrom($store_email);
			$mail->setSender($store_name);
			$mail->setReplyTo($store_email);
			$mail->setSubject($customer_subject);
			$mail->setHtml($customer_html);
			$mail->setText(strip_tags(str_replace(array('<br>', '<br/>', '<br />'), "\n", $customer_html)));
			$mail->send();
			$customer_sent = true;
		} catch (Exception $e) {
			$error_message = 'Could not send email to customer.';
		}

		try {
			// 2) Email copy to store
			$mail = new Mail();
			$mail->protocol = $this->config->get('config_mail_protocol');
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($store_email);
			$mail->setFrom($store_email);
			$mail->setSender($store_name);
			$mail->setReplyTo($email);
			$mail->setSubject($store_subject);
			$mail->setHtml($store_html);
			$mail->setText(strip_tags(str_replace(array('<br>', '<br/>', '<br />'), "\n", $store_html)));
			$mail->send();
			$store_sent = true;
		} catch (Exception $e) {
			$error_message = $error_message ? $error_message . ' Could not send email to store.' : 'Could not send email to store.';
		}

		if ($customer_sent && $store_sent) {
			$json['success'] = 'Your price request has been sent to ' . $email . ' and a copy was sent to our store email (' . $store_email . '). We will contact you shortly.';
		} elseif ($customer_sent) {
			$json['success'] = 'Your price request was sent to ' . $email . '. Our team will contact you shortly.';
		} elseif ($store_sent) {
			$json['success'] = 'Your price request was received by our store. We will contact you shortly at ' . $email . '.';
		} else {
			$json['error'] = $error_message ? $error_message : 'Could not send the emails. Please try again later.';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
