        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Selamat Datang, <?php echo $this->session->userdata("nama"); ?> !</h1>
            <p>Silahkan pilih menu yang akan anda tuju</p>
            <p><a href="home/lihat_user" class="btn btn-primary btn-large">Data User</a>
            <a href="home/lihat_bookmark" class="btn btn-primary btn-large">Data Bookmark</a>
            </p>
        </header>

    