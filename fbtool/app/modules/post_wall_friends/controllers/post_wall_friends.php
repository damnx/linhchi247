<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class post_wall_friends extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');
		permission_view();
	}

	public function index(){
		$data = array(
			"result" => $this->model->getAllAccount(),
			"save"   => $this->model->fetch("*", SAVE, "status = 1 AND category = 'friend'".getDatabyUser()),
			"categories" => $this->model->fetch("*", CATEGORIES, "category = 'message'".getDatabyUser())
		);
		$this->template->title(l("Auto post to friend's wall"));
		$this->template->build('index', $data);
	}

	public function ajax_post_now(){
		$data = array();
		switch (post('type')) {
			case 'link':
				if(post('link_url') == ""){
					ms(array(
						"st"    => "valid",
						"label" => "bg-red",
						"txt"   => l('Link is required')
					));
				}

				$data = array(
					"category"    => "friend",
					"type"        => "friend",
					"url"         => post('link_url'),
					"image"       => post('link_picture'),
					"title"       => post('link_title'),
					"caption"     => post('link_caption'),
					"description" => post('link_description'),
					"message"     => post('message'),
				);

				break;
			case 'image':
				if(post('image_url') == ""){
					ms(array(
						"st"    => "valid",
						"label" => "bg-red",
						"txt"   => l('Image is required')
					));
				}

				$data = array(
					"category"  => "friend",
					"type"      => "friend",
					"image"     => post('image_url'),
					"message"   => post('message')
				);
				break;
			case 'video':
				if(post('video_url') == ""){
					ms(array(
						"st"    => "valid",
						"label" => "bg-red",
						"txt"   => l('Video is required')
					));
				}

				$data = array(
					"category"    => "friend",
					"type"        => "friend",
					"image"       => post('video_url'),
					"description" => post('video_description'),
					"message"     => post('message'),
				);
				break;
			default:
				if(post('message') == ""){
					ms(array(
						"st"    => "valid",
						"label" => "bg-red",
						"txt"   => l('Message is required'),
					));
				}

				$data = array(
					"category"  => "friend",
					"type"      => "friend",
					"message"   => post('message'),
				);
				break; 
		}

		$group = explode("{-}", post('group'));
		if(count($group) == 6){
			$data["uid"]            = session("uid");
			$data["group_type"]     = post('type');
			$data["account_id"]     = $group[1];
			$data["account_name"]   = $group[2];
			$data["group_id"]       = $group[3];
			$data["name"]           = $group[4];
			$data["privacy"]        = $group[5];
			$data["time_post"]      = NOW;
			$data["changed"]        = NOW;
			$data["created"]        = NOW;
			$data["deplay"]         = 180;
			$data["status"]         = 4;

			$date = new DateTime(NOW, new DateTimeZone(TIMEZONE_SYSTEM));
			$date->setTimezone(new DateTimeZone(TIMEZONE_USER));
			$time_post_show = $date->format('Y-m-d H:i:s');

			$data["time_post_show"] = $time_post_show;

			$account = $this->model->get("*", FACEBOOK_ACCOUNTS, "id = '".$group[1]."'".getDatabyUser());
			if(!empty($account)){
				$this->db->insert(FACEBOOK_SCHEDULES, $data);
				$id = $this->db->insert_id();

				$data['access_token'] = $account->access_token;
				$data['username'] = $account->username;
				$data['password'] = $account->password;
				$data['cookies'] = $account->cookies;
				$data['fid'] = $account->fid;

				$response = (object)Fb_Post((object)$data);
				$this->db->update(FACEBOOK_SCHEDULES, array(
					"status" => ($response->st == "success")?3:4,
					"result" => (isset($response->id))?$response->id:"",
					"message_error" => ($response->st == "success")?$response->txt:"",
				), "id = {$id}");

				if($response->st == "success"){
					ms(array(
						"st"    => "success",
						"label" => "bg-light-green",
						"txt"   => "<span class='col-green'>".l('Post successfully')." <a href='https://facebook.com/".((isset($response->id) && $response->id != "")?$response->id:$group[3])."' target='_blank'><i class='col-light-blue fa fa-external-link-square' aria-hidden='true'></i></a></span>"
					));
				}else{
					ms(array(
						"st"    => "error",
						"label" => "bg-red",
						"txt"   => "<span class='col-red'>".$response->txt."</span>"
					));
				}
			}else{
				ms(array(
					"st"    => "error",
					"label" => "bg-red",
					"txt"   => "<span class='col-red'>".l('Facebook account not exist')."</span>"
				));
			}
		}else{
			ms(array(
				"st"    => "error",
				"label" => "bg-red",
				"txt"   => "<span class='col-red'>".l('Have problem with this item')."</span>"
			));
		}
	}
	
	public function ajax_save_schedules(){
		$data = array();
		$groups = $this->input->post('id');
		switch (post('type')) {
			case 'link':
				if(post('link_url') == ""){
					ms(array(
						"st"    => "valid",
						"label" => "bg-red",
						"txt"   => l('Link is required')
					));
				}

				$data = array(
					"category"    => "friend",
					"type"        => "friend",
					"url"         => post('link_url'),
					"image"       => post('link_picture'),
					"title"       => post('link_title'),
					"caption"     => post('link_caption'),
					"description" => post('link_description'),
					"message"     => post('message'),
				);

				break;
			case 'image':
				if(post('image_url') == ""){
					ms(array(
						"st"    => "valid",
						"label" => "bg-red",
						"txt"   => l('Image is required')
					));
				}

				$data = array(
					"category"  => "friend",
					"type"      => "friend",
					"image"     => post('image_url'),
					"message"   => post('message')
				);
				break;
			case 'video':
				if(post('video_url') == ""){
					ms(array(
						"st"    => "valid",
						"label" => "bg-red",
						"txt"   => l('Video is required')
					));
				}

				$data = array(
					"category"    => "friend",
					"type"        => "friend",
					"image"       => post('video_url'),
					"description" => post('video_description'),
					"message"     => post('message'),
				);
				break;
			default:
				if(post('message') == ""){
					ms(array(
						"st"    => "valid",
						"label" => "bg-red",
						"txt"   => l('Message is required'),
					));
				}

				$data = array(
					"category"  => "friend",
					"type"      => "friend",
					"message"   => post('message'),
				);
				break; 
		}

		if(post('time_post') == ""){
			$json[] = array(
				"st"    => "valid",
				"label" => "bg-red",
				"text"  => l('Time post is required')
			);
		}

		if(empty($groups)){
			ms(array(
				"st"    => "valid",
				"label" => "bg-red",
				"txt"   => l('Select at least a friend')
			));
		}

		if(post('auto_repeat') != 0){
			$data["repeat_post"] = 1;
			$data["repeat_time"] = (int)post("auto_repeat");
			$data["repeat_end"]  = date("Y-m-d", strtotime(post('repeat_end')));
		}else{
			$data["repeat_post"] = 0;
		}

		$count = 0;
		$deplay = (int)post('deplay')*60;
		$list_deplay = array();
		for ($i=0; $i < count($groups); $i++) { 
			$list_deplay[] = $deplay*$i;
		}

		$auto_pause = (int)post('auto_pause');
		if($auto_pause != 0){
			$pause = 0;
			$count_deplay = 0;
			for ($i=0; $i < count($list_deplay); $i++) { 
				$item_deplay = 1;
				if($auto_pause == $count_deplay){
					$pause += post('time_pause')*60;
					$count_deplay = 0;
				}

				$list_deplay[$i] += $pause;
				$count_deplay++;
			}
		}

		shuffle($list_deplay);

		$time_post_show = strtotime(post('time_post').":00");
		$time_now  = strtotime(NOW) + 60;
		if($time_post_show < $time_now){
			$time_post_show = $time_now;
		}

		$date = new DateTime(date("Y-m-d H:i:s", $time_post_show), new DateTimeZone(TIMEZONE_USER));
		$date->setTimezone(new DateTimeZone(TIMEZONE_USER));
		$time_post = $date->format('Y-m-d H:i:s');

		foreach ($groups as $key => $group) {
			$group  = explode("{-}", $group);
			if(count($group) == 6){
				$data["uid"]            = session("uid");
				$data["group_type"]     = post('type');
				$data["account_id"]     = $group[1];
				$data["account_name"]   = $group[2];
				$data["group_id"]       = $group[3];
				$data["name"]           = $group[4];
				$data["privacy"]        = $group[5];
				$data["time_post"]      = date("Y-m-d H:i:s", strtotime($time_post) + $list_deplay[$key]);
				$data["time_post_show"] = date("Y-m-d H:i:s", $time_post_show + $list_deplay[$key]);
				$data["status"]         = 1;
				$data["deplay"]         = $deplay;
				$data["changed"]        = NOW;
				$data["created"]        = NOW;

				$this->db->insert(FACEBOOK_SCHEDULES, $data);
				$count++;
			}
		}

		if($count != 0){
			ms(array(
				"st"    => "success",
				"label" => "bg-green",
				"txt"   => l('Successfully')
			));
		}else{
			ms(array(
				"st"    => "valid",
				"label" => "bg-red",
				"txt"   => l('The error occurred during processing')
			));
		}
	}
}