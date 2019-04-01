<?php if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
class Sunhouse extends MY_Controller
{
   /*
   * Ham khi khoi tao
   */
   public function __construct()
   {
       parent::__construct();
       $this->load->model('sunhouse_model');
   }
   
  
   /*
    * Trang dang danh sách bài viết
    */
   public function index()
   {
   	  //Buoc 1:load thu vien phan trang
   	  $this->load->library('pagination');
   	  //Buoc 2:Cau hinh cho phan trang
   	  //lay tong so luong bai viet tu trong csdl
   	  $total_rows = $this->sunhouse_model->get_total();
   	  $config = array();
   	  $config['base_url']    = base_url('sunhouse/index');
   	  $config['total_rows']  = $total_rows;
   	  $config['per_page']    = 15;
   	  $config['uri_segment'] = 3;
   	  $config['next_link']   = "Trang kế tiếp";
   	  $config['prev_link']   = "Trang trước";
   	  
   	   //Khoi tao phan trang
          $this->pagination->initialize($config);
    
          //lay danh sach san pham trong csdl,moi lan lay limit 3 san pham
          //$this->uri->segment(n): lay ra phan doan thu n tren link url
          $segment = $this->uri->segment(4);
          $segment = intval($segment);
          $input = array();
          $input['limit'] = array($config['per_page'], $segment);
      $sunhouses = $this->sunhouse_model->get_list($input);
      $this->data['list'] = $sunhouses;
      
   	  // Hien thi view
	  $this->data['temp'] = 'site/sunhouse/list';
	  $this->load->view('site/layout', $this->data);
   }
   
   /*
    * Trang chi tiết bài viết
    */
   public function view()
   {
        // Lay thong tin cua bài viết
        //id của bài viết sẽ nằm ở phân đoạn thứ 3
		$id = $this->uri->rsegment(4);
		$info = $this->sunhouse_model->get_info($id);
		if (!$info)
		{
			$this->session->set_flashdata('flash_message', 'Không tồn tại bài viết này');
			redirect();
		}
		$info->_image = base_url('upload/sunhouse/'.$info->image_link);
		$this->data['info'] = $info;

        //cap nhat luot xem cho bai viet
        $data = array();
        $data['count_view'] = $info->count_view + 1;
        $this->sunhouse_model->update($id, $data);

        //lay danh sach san pham moi
        $input = array();
        $input['limit'] = array(3, 0);	  
        $input['order'] = array('count_view', 'DESC');
        $maxView = $this->sunhouse_model->get_list($input);
        $this->data['maxView']  = $maxView;
        
		// Hien thi view
	    $this->data['temp'] = 'site/sunhouse/view';
	    $this->load->view('site/layout', $this->data);
   }
   
  
}

