<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
    public function __construct(){
        parent::__construct();

        date_default_timezone_set("Asia/Jakarta");

        // $this->output->enable_profiler(true);

        if (!$this->ion_auth->logged_in()){
			$this->session->set_flashdata('message', 'Anda, tidak memiliki hak mengakses halaman ini!!');
			redirect('/login');
		}

        // if(($this->get_user()->changePwd == 0) AND ($this->uri->segment(1) != 'changepwd')){
        //   // Jika status changePwd tabel user bernilai 0
        //   redirect('changepwd');
        // }
    }

    public function get_user()
    {
        return $this->ion_auth->user()->row();
    }
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
