<?php

namespace App\Controllers;
use App\Models\ContactModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact extends BaseController
{
    public function index()
    {
        $contactModel = new ContactModel();
        
        // Ambil semua data contact yang dianggap sebagai FAQ
        $data['faqs'] = $contactModel->orderBy('created_at', 'DESC')->findAll();

        return view('contact/index', $data);
    }

    public function send()
    {
        $contactModel = new ContactModel();

        // Ambil data dari form
        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        // Simpan ke DB
        $contactModel->insert($data);

        // === Kirim Email pakai PHPMailer ===
        require ROOTPATH.'vendor/autoload.php'; // pastikan path benar

        $mail = new PHPMailer(true);

        try {
            // Konfigurasi SMTP (misal pakai Gmail)
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'contoh@gmail.com'; // ganti dengan email kamu
            $mail->Password   = 'ini diisi pass app'; // pakai App Password (bukan password biasa)
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Penerima
            $mail->setFrom($data['email'], $data['name']); // pengirim dari form
            $mail->addAddress('ap.shinta18@gmail.com', 'Admin Sekolah'); // tujuan

            // Isi email
            $mail->isHTML(true);
            $mail->Subject = $data['subject'];
            $mail->Body    = "
                <h3>Pesan Baru dari Form Kontak</h3>
                <p><b>Nama:</b> {$data['name']}</p>
                <p><b>Email:</b> {$data['email']}</p>
                <p><b>Pesan:</b><br>{$data['message']}</p>
            ";

            $mail->send();
            $msg = 'Pesan berhasil dikirim!';
        } catch (Exception $e) {
            $msg = "Pesan tersimpan, tapi email gagal dikirim: {$mail->ErrorInfo}";
        }

        // Redirect dengan flashdata
        return redirect()->to('/contact')->with('success', $msg);
    }
}
