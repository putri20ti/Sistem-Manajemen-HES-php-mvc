<?php
function template_view_auth($view, $data)
{
    $ci = get_instance();
    $ci->load->view("layout/auth_header", $data);
    $ci->load->view($view);
    $ci->load->view("layout/auth_footer");
}

function template_view($view, $data)
{
    $ci = get_instance();
    $ci->load->view("layout/header", $data);
    $ci->load->view("layout/topbar");
    $ci->load->view("layout/sidebar");
    $ci->load->view($view);
    $ci->load->view("layout/footer");
}

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->has_userdata('login_session')) {
        setMsg('silahkan login.');
        redirect('auth');
    }
}

function is_role($role)
{
    $ci = get_instance();
    $user_role = $ci->session->userdata('login_session')['role'];

    $status = false;

    if ($user_role && $user_role == $role) {
        $status = true;
    }

    return $status;
}

function setMsg($type, $msg)
{
    $ci = get_instance();
    $text = "";
    $text .= "<div class='alert text-white bg-{$type}' role='alert'>";
    $text .= "<div class='iq-alert-text'>{$msg}</div>";
    $text .= "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <i class='ri-close-line'></i>
                           </button>
                        </div>";
    return $ci->session->set_flashdata('msg', $text);
}

function msgBox($msg = "save", $success = true)
{
    switch ($msg) {
        case "save":
            $pesan = $success ? "Data berhasil disimpan!" : "Gagal menyimpan data!";
            break;
        case "edit":
            $pesan = $success ? "Data berhasil diedit!" : "Gagal mengedit data!";
            break;
        case "delete":
            $pesan = $success ? "Data berhasil dihapus!" : "Gagal menghapus data!";
            break;
        case "login":
            $pesan = $success ? "Berhasil login!" : "Gagal login!";
            break;
        case "logout":
            $pesan = $success ? "Berhasil logout!" : "Gagal logout!";
            break;
        default:
            $pesan = "";
            break;
    }
    $title = $success ? "Berhasil!" : "Gagal!";
    $type = $success ? "success" : "error";
    $alert = "
        <script type='text/javascript'>
        $(document).ready(function() {
            Swal.fire(
                '{$title}',
                '{$pesan}',
                '{$type}'
            );
        });
        </script>
    ";
    $ci = get_instance();
    return $ci->session->set_flashdata('pesan', $alert);
}

function userdata($field)
{
    $ci = get_instance();
    $ci->load->model('MainModel', 'main');

    $userId = $ci->session->userdata('login_session')['user'];
    return $ci->main->get('user', ['id' => $userId])[$field];
}

function output_json($data)
{
    $ci = get_instance();
    $data = json_encode($data);
    $ci->output->set_content_type('application/json')->set_output($data);
}

function indo_date($date, $print_day = false)
{
    $day        = [1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
    $month      = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    $split      = explode('-', $date);
    $nice_date  = $split[2] . ' ' . $month[(int) $split[1]] . ' ' . $split[0];

    if ($print_day) {
        $num = date('N', strtotime($date));
        return $day[$num] . ', ' . $nice_date;
    }
    return $nice_date;
}
