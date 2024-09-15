<?php
use App\Models\Package;
$package = Package::where('type', 'S')->first();
?>

<footer class="footer aktif d-none d-lg-block">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid bg-white rounded-circle p-1 mb-2" width="50"
                    src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                <p class="text-justify">We applaud your great achievement in completing your studies! We understand the
                    importance of preserving beautiful memories at important moments in life. We'd love to be part of
                    your journey by capturing and celebrating these meaningful moments.
                    With our professional photographers,
                    we are ready to capture your special moments for your graduation portraits.</p>
                <div>Copyright &copy; 2024 || PROJECT KURO</div>
            </div>
            <div class="col-md-4 text-right">
                <p>
                    <a href="#" class="fa text-white fa-twitter pe-2"></a>
                    <a href="#" class="fa text-white fa-facebook pe-2"></a>
                    <a href="#" class="fa text-white fa-instagram"></a>
                </p>
                <div class="mb-3">
                    <div class="fw-bold">TENTANG KAMI</div>
                    <div class="fw-bold">KEBIJAKAN PRIVASI</div>
                    <div class="fw-bold">SYARAT & KETENTUAN</div>
                </div>
                <a class="text-white" href="https://wa.me/+6287889165766"><i class="fa fa-phone pe-2"></i>
                    +6287889165766</a>
                <div>Jl. A Kadir I, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung,Lampung 35144</div>
            </div>
        </div>
    </div>
</footer>
