<?php $session = session() ?>
<?= $this->extend('home/home') ?>
<?= $this->section('content') ?>
	<div class="post-single-wrapper axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Start Banner Area -->
                        <div class="banner banner-single-post post-formate post-video axil-section-gapBottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Start Single Slide  -->
                                        <div class="content-block">
                                            <!-- Start Post Content  -->
                                            <div class="post-content">
                                                <h1 class="title"><?=$wisata->nama?></h1>
                                            </div>
                                            <!-- End Post Content  -->
                                        </div>
                                        <!-- End Single Slide  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Banner Area -->

                        <div class="axil-post-details">
                            <figure class="wp-block-image">
                                <div class="post-gallery-activation axil-slick-arrow arrow-between-side">
                                    <div class="post-images">
                                        <img src="<?=base_url();?>/images/datawisata/<?=$wisata->foto1?>" alt="Post Images">
                                    </div>
                                    <div class="post-images">
                                        <img src="<?=base_url();?>/images/datawisata/<?=$wisata->foto2?>" alt="Post Images">
                                    </div>
                                    <div class="post-images">
                                        <img src="<?=base_url();?>/images/datawisata/<?=$wisata->foto3?>" alt="Post Images">
                                    </div>
                                </div>
                            </figure>
                            <?php foreach($jenis as $row):?>
	                            <?php if($row['id'] == $wisata->jenis_id){?>
	                            <p>Jenis Wisata : <?=$row['nama']?></p>
	                            <?php }?>                                
	                        <?php endforeach;?>
	                        <?php foreach($kecamatan as $row):?>
	                            <?php if($row['id'] == $wisata->kecamatan_id){?>
	                            <p>Kecamatan : <?=$row['nama']?></p>
	                            <?php }?>                                
	                        <?php endforeach;?>
	                        <p>Alamat : <?=$wisata->alamat?></p>
                            <p>Latlong : <a href="https://www.google.com/maps/search/?api=1&query=<?=$wisata->latlong?>"><?=$wisata->latlong?></a></p>
                            <p>Skor Rating : <?=$wisata->skor_rating?>/5</p>
                            <p>Harga : <?=$wisata->harga_tiket?></p>
                            <p>Fasilitas :</p>
                            <p><?=$wisata->fasilitas?></p>
                            <div class="social-share-block">
                                <div class="post-like">
                                    <a href="#"><i class="fal fa-thumbs-up"></i><span>2.2k Like</span></a>
                                </div>
                                <ul class="social-icon icon-rounded-transparent md-size">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                            <div class="axil-comment-area">
                                <div class="comment-respond">
                                    <h4 class="title">Post a comment</h4>
                                    <form action="<?=base_url();?>/home/kirimkomentar" method="post" method="POST">
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span
                                                class="required">*</span></p>
                                        <div class="row row--10">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                	<input type="hidden" name="wisata_id" value="<?=$wisata->id?>" />
                                                    <label for="tanggal">Tanggal</label>
                                                    <input id="tanggal" type="date" name="tanggal">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label for="email">Nilai Rating</label>
                                                    <select name="nilai_rating_id">
				                                        <?php foreach($nilai as $row):?>
				                                        <option value="<?=$row['id']?>"><?=$row['nama']?></option>
				                                        <?php endforeach;?>
				                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="message">Isi</label>
                                                    <textarea id="message" name="isi"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="comment-form-cookies-consent">
                                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                    <label for="wp-comment-cookies-consent">Save my name, email, and
                                                        website in this browser for the next time I comment.</label>
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit cerchio">
                                                	<?php if($session->get('id') != null){?>
			                                            <input type="hidden" name="users_id" value="<?=$session->get('id')?>">
			                                            <button name="submit" type="submit" id="submit" class="axil-button button-rounded" value="Post Comment">Send</button>
			                                       <?php }else{?>
			                                            <a href="<?= base_url();?>/auth/login">Silakan Login Terlebih Dahulu</a>
			                                        <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="axil-comment-area">
                                    <h4 class="title">comments</h4>
                                    <ul class="comment-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                            	<?php foreach($komentar as $row):?>
                                                <div class="single-comment">
                                                    <div class="comment-img">
                                                        <img src="<?= base_url();?>/assets/home/images/post-images/author/author-b2.png" alt="Author Images">
                                                    </div>
                                                    <div class="comment-inner">
                                                        <h6 class="commenter">
                                                            <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
										        	<?php foreach($user as $use):?>
										                <?php if($row['users_id'] == $use['id']){?>
										                	<span data-text="<?=$use['username']?>"><?=$use['username']?></span>
										                <?php }?>
										            <?php endforeach;?>
                                                                </span>
                                                            </a>
                                                        </h6>
                                                        <div class="comment-meta">
                                                        	<div class="time-spent"><?=$row['tanggal']?> || </div>
                                                            <?php foreach($nilai as $nl):?>
							                                    <?php if($row['nilai_rating_id'] == $nl['id']){?>
							                                    	<div class="time-spent"><?=$nl['nama']?></div>
							                                    <?php }?>
							                                <?php endforeach;?>
                                                            
                                                            <div class="reply-edit">
                                                                <div class="reply">
                                                                    <a class="comment-reply-link hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                        	<div class="col-md-2">
													                            <?php if($session->get('role') == 'administrator'){?>
													                                <span><a class="reply_bt" href="<?=base_url();?>/home/hapuskomentar/<?=$row['id']?>">Hapus</a></span>
													                            <?php }?>
													                        </div>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p class="b2"><?=$row['isi']?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endforeach;?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-inner">
                            <div class="axil-single-widget widget widget_search mb--30">
                                <h5 class="widget-title">Search</h5>
                                <form action="#">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="axil-single-widget widget widget_newsletter mb--30">
                                <!-- Start Post List  -->
                                <div class="newsletter-inner text-center">
                                    <h4 class="title mb--15">Never Miss A Post!</h4>
                                    <p class="b2 mb--30">Sign up for free and be the first to <br /> get notified about updates.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Your Email ">
                                        </div>
                                        <div class="form-submit">
                                            <button class="cerchio axil-button button-rounded"><span>Subscribe</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>