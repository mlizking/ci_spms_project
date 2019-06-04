<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layouts/script_head'); ?>
    <title>SPMS</title>
</head>
<body>
    <?php $this->load->view('layouts/navbar'); ?>
    <center>
    <?php 
        //if($this->session->userdata('email') != '')
        //{
        //    echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';
        //    echo '<label><a href="'.site_url('userlogin_controller/logout').'">Logout</a></label><br>';
        //}
    ?>
    <img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.0-9/61635888_2315730965116966_3435521675527979008_n.jpg?_nc_cat=102&_nc_eui2=AeF7I8KsyxxeyJ8Eafn8HFIr7tlAF2sDVPAj9RiZOKJFij_B4o6vomQMcRVcXWj6tUWBnz0QzjVSiE89bG80b2s6-8IZ43OL4vJs_w9GvtJwDA&_nc_oc=AQmQslk5CUhv8hJrj5LRxJQuo5Fmyg4nXPGxn8LWIyCLt2z1l6Ab7Eh9oGJzkY0G1t4&_nc_ht=scontent.fbkk2-8.fna&oh=08ba1ae070454f5d0e8f7b0790ba2d58&oe=5D9E00CB" class="img-fluid mb-2" alt="Responsive image">
    <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t1.0-9/61954313_2323231331033596_2337773750302277632_n.jpg?_nc_cat=109&_nc_eui2=AeH1FrJ-AAHLgFm4rLfDAEFBoUMkHJ6dhn88SbnaBbOoKWsRzICeFzJudhci-HsUPoLl-g5L_lmgzyJNEWWsZxK1pz8p2RejmeOKujR8IZE3jQ&_nc_oc=AQmpg9RMKzYdhrfckOOfj_KBX-ME_SS4A3gZeDZAehFHtCQS8Fp2Z3OIMuOViHZvcjc&_nc_ht=scontent.fbkk2-7.fna&oh=ccc950b3202e3f6a20b0f5a72afd55b6&oe=5D96FFA1" class="img-fluid mb-2" alt="Responsive image">
    <img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.0-9/61910232_2191918384219343_8285369334235136000_o.jpg?_nc_cat=110&_nc_eui2=AeHBKtH2rl_Kb1OI20Iw-34vEOmzaYj85RVRJXbTnvfKOdOSczAB08Bm2AC7bE5zHNmV2iN4jFeMUp5ppIfD9nwIn_tVzaAZi5aOOVI3NrkxcQ&_nc_oc=AQm9OdZUGzpK3DdoDPs7gvh359V9xWKQDpgim32bQbmZ_03MrsHdKpKuf--geVhW4Ns&_nc_ht=scontent.fbkk2-5.fna&oh=0fed23d5072e04149115ffaffee9f848&oe=5D538C90" class="img-fluid mb-2" alt="Responsive image">
    </center>
    <?php $this->load->view('layouts/footer'); ?>
    <?php $this->load->view('layouts/script_body'); ?>
</body>
</html>
