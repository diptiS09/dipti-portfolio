<footer class="footer">

    <div class="footer-left">
        <img src="assets/images/logo.png" alt="Logo">

        <span>Designed & Developed by <strong>Dipti Surve</strong></span>
    </div>

    <div class="footer-right">

        <a href="#"><i class="fa-brands fa-github"></i></a>

        <a href="#"><i class="fa-brands fa-linkedin"></i></a>

        <a href="#"><i class="fa-solid fa-envelope"></i></a>

        <a href="#"><i class="fa-solid fa-palette"></i></a>

    </div>

</footer>

<style>
    .footer{

    background:#021022;

    border-top:1px solid rgba(255,255,255,.08);

    padding:20px 8%;

    display:flex;

    justify-content:space-between;

    align-items:center;

    flex-wrap:wrap;

    gap:20px;

}

.footer-left{

    display:flex;

    align-items:center;

    gap:15px;

}

.footer-left img{

    width:42px;

}

.footer-left span{

    color:#8ca8c8;

    font-size:14px;

}

.footer-left strong{

    color:#fff;

    font-weight:500;

}

.footer-right{

    display:flex;

    gap:14px;

}

.footer-right a{

    width:42px;

    height:42px;

    border-radius:12px;

    background:#0b2347;

    color:#fff;

    display:flex;

    align-items:center;

    justify-content:center;

    text-decoration:none;

    transition:.3s;

}

.footer-right a:hover{

    background:#ff9800;

    transform:translateY(-4px);

}

@media(max-width:768px){

.footer{

justify-content:center;

text-align:center;

}

.footer-left{

flex-direction:column;

}

}
</style>