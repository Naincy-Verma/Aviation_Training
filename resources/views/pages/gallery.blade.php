@extends('layout.master')

@section('css')
<style>
  /* Keep your existing CSS as is */
  .gallery-section {
    padding: 80px 0;
    background: rgb(255, 255, 255);
  }
  .section-label {
    color: rgb(220, 187, 135);
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 15px;
    text-align: center;
  }
  .section-title {
    color: rgb(33, 37, 41);
    font-size: 42px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 60px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
  }
  .gallery-item {
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
    cursor: pointer;
    border-radius: 8px;
  }
  .gallery-item img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
  }
  .gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(220, 187, 135, 0.9);
    opacity: 0;
    transition: opacity 0.4s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .gallery-item:hover .gallery-overlay {
    opacity: 1;
  }

  .gallery-item:hover img {
    transform: scale(1.1);
  }
  .plus-icon {
    width: 60px;
    height: 60px;
    background: rgb(33, 37, 41);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    position: relative;
  }
  .plus-icon::before,
  .plus-icon::after {
    content: '';
    position: absolute;
    background: rgb(255, 255, 255);
    transition: background 0.3s ease;
  }
  .plus-icon::before {
    width: 24px;
    height: 3px;
  }
  .plus-icon::after {
    width: 3px;
    height: 24px;
  }
  .plus-icon:hover {
    background: rgb(255, 255, 255);
  }
  .plus-icon:hover::before,
  .plus-icon:hover::after {
    background: rgb(33, 37, 41);
  }

  /* 🔍 Added for popup effect */
  .image-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.85);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }
  .image-popup img {
    max-width: 90%;
    max-height: 80%;
    border-radius: 8px;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
  }
  .close-popup {
    position: absolute;
    top: 40px;
    right: 60px;
    font-size: 36px;
    color: #fff;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.3s ease;
  }
  .close-popup:hover {
    background: rgba(255, 255, 255, 0.3);
  }
</style>
@endsection

@section('content')
 <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="banner-section inner-banner-section bg-overlay-black bg_img"
            data-background="assets/images/bg/inner-bg.png">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-12 text-center">
                        <div class="banner-content">
                            <h1 class="title">Our Gallery</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          Gallery Section Start 
      ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<section class="gallery-section">
  <div class="container-fluid">
    <div class="section-label">OUR GALLERY</div>
    <h2 class="section-title">Checkout our flights & travel photos</h2>
    
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="{{asset('assets/images/aviation/gallery_aviation/1.jpg')}}" alt="Business travelers">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="{{asset('assets/images/aviation/gallery_aviation/2.png')}}" alt="Luxury jet interior">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="{{asset('assets/images/aviation/gallery_aviation/3.jpg')}}" alt="Traveler boarding">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="{{asset('assets/images/aviation/gallery_aviation/4.jpg')}}" alt="Passengers relaxing">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="{{asset('assets/images/aviation/gallery_aviation/5.jpg')}}" alt="Flight attendant">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="{{asset('assets/images/aviation/gallery_aviation/6.jpg')}}" alt="Aviation crew">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=600" alt="Private jet boarding">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=600" alt="Luxury car at airport">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6">
        <div class="gallery-item">
          <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600" alt="View from plane">
          <div class="gallery-overlay">
            <div class="plus-icon"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Gallery Section End 
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Popup container 
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="imagePopup" class="image-popup" style="display:none;">
  <span class="close-popup">&times;</span>
  <img src="" alt="Popup Image">
</div>

@endsection

@section('js')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const plusIcons = document.querySelectorAll('.plus-icon');
    const popup = document.getElementById('imagePopup');
    const popupImage = popup.querySelector('img');
    const closeBtn = popup.querySelector('.close-popup');

    plusIcons.forEach(icon => {
      icon.addEventListener('click', function (e) {
        e.stopPropagation();
        const img = this.closest('.gallery-item').querySelector('img');
        popupImage.src = img.src;
        popup.style.display = 'flex';
      });
    });

    closeBtn.addEventListener('click', function () {
      popup.style.display = 'none';
    });

    popup.addEventListener('click', function (e) {
      if (e.target === popup) popup.style.display = 'none';
    });
  });
</script>
@endsection
