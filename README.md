# codeigniter-indonesian-date-helper
simple codeigniter helper to show format date in indonesian date format

Instalasi
------------
copy semua file di dalam folder helpers ke folder helpers aplikasi anda. dan untuk meload helpernya anda cukup menggunakan script seperti ini :

    $this->load->helper('indonesian_date');

dan contoh penggunaannya seperti ini :

    $date = date("Y-m-d");
    echo indonesian_date($data);
