<nav>
    <div class="lastname">
        <h1 class="nav-name">Karla Valenzuela Galeria</h1>
    </div>
    <ul>
        <a href="../home/"><li><i class="fas fa-home"></i><span class="nav-text">  Inicio</span></li></a>
        <!-- <a href="../about/"><li><i class="fas fa-user-alt"></i><span class="nav-text">  About</span></li></a> -->
        <a href="../gallery/"><li><i class="far fa-images"></i><span class="nav-text">  Galeria</span></li></a>
        <!-- <li><i class="fas fa-moon"></i></li>  To be done switch beetwenn dark/light mode--> 
        <?php if (isset($_SESSION['logged'])):?>
        <li class="user-profile">
        <i class="fas fa-user-alt"></i>
        <span class="nav-text"><?=$_SESSION['username']?></span>
        </li>
        <?php else:?>
        <a href="../login/"><li><i class="fas fa-sign-in-alt"></i><span class="nav-text">  Login</span></li></a>
        <?php endif; ?>
    </ul>
</nav>