<?php $session = session() ?>
<?= $this->extend('home/home') ?>
<?= $this->section('content') ?>
        <div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                	<?php foreach($wisata as $row):?>
                    <div class="col-lg-8 col-xl-8">
                        <div class="content-block post-list-view is-active mt--30">
                            <div class="post-thumbnail">
                                <a href="home/detail/<?=$row['id'];?>">
                                    <img src="<?= base_url();?>/images/datawisata/<?=$row['foto1'];?>" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="<?=$row['website'];?>"><?=$row['website'];?></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="home/detail/<?=$row['id'];?>"><?=$row['nama'];?></a></h4>
                                <div class="post-meta-wrapper">
                                    <div class="post-meta">
                                        <div class="content">
                                            <ul class="post-meta-list">
                                            	<?php if($row['harga_tiket'] > 0) {?>
                                                <li>Harga Tiket : Rp.<?=$row['harga_tiket'];?></li>
                                            	<?php }else{?>
                                            	<li>Harga Tiket : Free</li>
                                            	<?php }?>
                                                <li>Skor : <?=$row['skor_rating'];?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="social-share-transparent justify-content-end">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
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
                            <div class="axil-single-widget widget widget_postlist mb--30">
                                <h5 class="widget-title">Popular</h5>
                                <div class="post-medium-block">
                                	<?php foreach($wisata as $row):?>
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-thumbnail">
                                            <a href="home/detail/<?=$row['id'];?>">
                                                <img src="<?= base_url();?>/images/datawisata/<?=$row['foto1'];?>" alt="Post Images">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="title"><a href="home/detail/<?=$row['id'];?>"><?=$row['nama'];?></a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <?php if($row['harga_tiket'] > 0) {?>
	                                                <li>Harga Tiket : Rp.<?=$row['harga_tiket'];?></li>
	                                            	<?php }else{?>
	                                            	<li>Harga Tiket : Free</li>
	                                            	<?php }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <div class="axil-single-widget widget widget_social mb--30">
                                <h5 class="widget-title">Stay In Touch</h5>
                                <ul class="social-icon md-size justify-content-center">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-slack"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>