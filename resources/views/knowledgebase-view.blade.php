<?php $page="knowledgebase-view";?>
@extends('layout.mainlayout')
@section('content')
@component('components.breadcrumb')                
    @slot('title') Knowledgebase @endslot
    @slot('li_1') Dashboard @endslot
    @slot('li_2') Knowledgebase @endslot
@endcomponent     
                    <!-- Content Starts -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <article class="post">
                                        <h1 class="post-title"><i class="fas fa-dot-circle"></i> Lorem ipsum dolor sit amet </h1>
                                        <ul class="meta">
                                            <li>Created : <span class="spanc1">Feb, 04, 2016</span></li>
                                            <li>Category : <span class="spanc2"><a href="#">Category 1,</a> <a href="#">Category 2</a></span></li>
                                            <li>Last Updated : <span class="spanc3">April, 15, 2016</span></li>
                                            <li>Comments : <span class="spanc4"><a href="#">5</a></span> </li>
                                            <li>Views : <span class="spanc2">1198</span></li>
                                        </ul>
                                        <p>
                                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                        </p>
                                        <h2>Sed ut perspiciatis unde omnis iste</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                        </p>
                                        <h2>Sed ut perspiciatis unde omnis iste</h2>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                                        </p>
                                    </article>
                                    <div class="feedback">
                                        <h3>
                                            Was this article helpful to you?
                                            <span class="fb-span">
                                                <a href="#" class="btn btn-success me-1"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fa fa-thumbs-down"></i></a>
                                            </span>
                                        </h3>
                                        
                                        <p>29 found this helpful</p>
                                    </div>
                                    
                                    <div class="comment-section">
                                        <div class="comments-area clearfix">
                                            <h3>( 2 ) Comments</h3>
                                            <ul class="comment-list">
                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-author">
                                                            <img width="86" height="86" class="avatar avatar-86 photo" src="{{ URL::asset('/assets/img/user.jpg')}}" alt="">
                                                        </div>
                                                        <div class="comment-details">
                                                            <div class="author-name">
                                                                <a class="url" href="#">John Doe</a> <span class="commentmetadata">October 25, 2016 at 01:10 pm</span>
                                                            </div>
                                                            <div class="comment-body">
                                                                <p>Integer id dolor libero. Cras in turpis nulla. Vivamus at tellus erat. Nulla ligula sem, eleifend vitae semper et, blandit a elit. Nam et ultrices lectus. Ut sit amet risus eget neque scelerisque consectetur.</p>
                                                            </div>
                                                            <div class="reply"><a href="#" class="comment-reply-link" rel="nofollow"><i class="fa fa-reply"></i> Reply</a></div>
                                                        </div>
                                                    </div>
                                                    <ul class="children">
                                                        <li>
                                                            <div class="comment">
                                                                <div class="comment-author">
                                                                    <img width="86" height="86" class="avatar avatar-86 photo" src="{{ URL::asset('/assets/img/user.jpg')}}" alt="">
                                                                </div>
                                                                <div class="comment-details">
                                                                    <div class="author-name">
                                                                        <a href="#" class="comment-reply-link"></a><a class="url" href="#">Astin Robert</a> <span class="commentmetadata">October 25, 2016 at 01:10 pm</span>
                                                                    </div>
                                                                    <div class="comment-body">
                                                                        <p>Mauris hendrerit consequat quam, sit amet fermentum metus cursus in. Nunc ac justo suscipit erat sagittis maximus a at tellus. Pellentesque congue nisi a nisl volutpat tempor.</p>
                                                                    </div>
                                                                    <div class="reply"><a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="comment-reply">
                                                <h3 class="comment-reply-title">Leave a Reply</h3>
                                                <form class="mb-0">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" id="name" name="name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" id="email" name="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="website">Website</label>
                                                                <input type="text" id="website" name="website" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="comment">Comment *</label>
                                                        <textarea id="comment" name="comment" class="form-control" rows="3" cols="5"></textarea>
                                                    </div>
                                                    <div class="submit-section">
                                                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="w-sidebar">
                                <div class="widget widget-category">
                                    <h4 class="widget-title">Categories</h4>
                                    <ul>
                                        <li>
                                            <a href="#">Categories 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Categories 2</a>
                                        </li>
                                        <li>
                                            <a href="#">Categories 3</a>
                                        </li>
                                        <li>
                                            <a href="#">Categories 4</a>
                                        </li>
                                        <li>
                                            <a href="#">Categories 5</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="widget widget-category">
                                    <h4 class="widget-title">Popular Articles</h4>
                                    <ul>
                                        <li><a href="#"> Installation &amp; Activation </a></li>
                                        <li><a href="#"> Premium Members Features </a></li>
                                        <li><a href="#"> API Usage &amp; Guide lines </a></li>
                                        <li><a href="#"> Getting Started &amp; What is next. </a></li>
                                        <li><a href="#"> Installation &amp; Activation </a></li>
                                        <li><a href="#"> Premium Members Features </a></li>
                                        <li><a href="#"> API Usage &amp; Guide lines </a></li>
                                        <li><a href="#"> Getting Started &amp; What is next. </a></li>
                                    </ul>
                                </div>
                                
                                <div class="widget widget-category">
                                    <h4 class="widget-title">Latest Articles</h4>
                                    <ul>
                                        <li><a href="#"> Installation &amp; Activation </a></li>
                                        <li><a href="#"> Premium Members Features </a></li>
                                        <li><a href="#"> API Usage &amp; Guide lines </a></li>
                                        <li><a href="#"> Getting Started &amp; What is next. </a></li>
                                        <li><a href="#"> Installation &amp; Activation </a></li>
                                        <li><a href="#"> Premium Members Features </a></li>
                                        <li><a href="#"> API Usage &amp; Guide lines </a></li>
                                        <li><a href="#"> Getting Started &amp; What is next. </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Content End -->
                    
               
@endsection