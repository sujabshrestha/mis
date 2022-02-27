@extends('frontEnd.layout.master')
@section('pageTitle', $service->title.' | '.getSiteSetting('site_title'))
@section('pageName', 'Blogs')
@push('style')
@endpush

@section('content')
<div id="content" class="site-content">
    <div class="entry-content">
        <div class="container">
            <div class="row">

                <div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <main id="main" class="site-main">

                        <article class="post-box post type-post hentry">
                            <div class="entry-media">
                                <a href="post.html">
                                    <img src=" {{ asset($service->image) }}" width="100%" alt="">
                                </a>
                            </div>
                            <div class="inner-post">
                                <header class="entry-header">
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <time class="entry-date published">{{ $service->created_at->format('Y-m-d') }}</time>
                                        </span>
                                        <span class="posted-in">
                                            <a href="#" rel="category tag">{{ $service->title }}</a>
                                        </span>
                                    </div>
                                </header>

                                <div class="entry-summary">

                                    <p>{!! $service->post_content !!}</p>

                                </div>


                            </div>
                        </article>

                        <div id="comments" class="comments-area">
                            <h4 class="comments-title">Comments (4)</h4>
                            <ol class="comment-list">

                                <li id="comment-5" class="comment even thread-even depth-1 comment-item">
                                    <article class="comment-wrap clearfix">

                                        <div class="gravatar">
                                            <img alt="" src="https://via.placeholder.com/68" class="avatar avatar-68 photo" height="68" width="68"> </div>

                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h6 class="comment-author">admin</h6>
                                                <span class="comment-time">March 11, 2018</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter.</p>
                                                <div class="comment-reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                            </div>
                                        </div>

                                    </article>
                                </li>

                                <ul class="children">

                                    <li id="comment-6" class="comment odd alt depth-2 comment-item">
                                        <article class="comment-wrap clearfix">

                                            <div class="gravatar">
                                                <img alt="" src="https://via.placeholder.com/68" class="avatar avatar-68 photo" height="68" width="68"> </div>

                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <h6 class="comment-author">admin</h6>
                                                    <span class="comment-time">October 24, 2018</span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Some need to protect very valuable information. All these factors should be taken into account.</p>
                                                    <div class="comment-reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                                </div>
                                            </div>

                                        </article>
                                    </li>

                                    <!-- #comment-## -->

                                    <li id="comment-7" class="comment even depth-2 comment-item">
                                        <article class="comment-wrap clearfix">

                                            <div class="gravatar">
                                                <img alt="" src="https://via.placeholder.com/68" class="avatar avatar-68 photo" height="68" width="68"> </div>

                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <h6 class="comment-author">admin</h6>
                                                    <span class="comment-time">October 24, 2018</span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>All these factors should be taken into account. A risk-aware Windows user can probably survive without any anti-virus software at all.</p>
                                                    <div class="comment-reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div>
                                                </div>
                                            </div>

                                        </article>
                                    </li>

                                    <!-- #comment-## -->
                                </ul>
                                <!-- .children -->
                                <!-- #comment-## -->

                                <li id="comment-4" class="comment odd alt thread-odd thread-alt depth-1 comment-item">
                                    <article class="comment-wrap clearfix">

                                        <div class="gravatar">
                                            <img alt="" src="https://via.placeholder.com/68" class="avatar avatar-68 photo" height="68" width="68"> </div>

                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h6 class="comment-author">admin</h6>
                                                <span class="comment-time">October 23, 2018</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>The Rangers needed a jolt for their first home game of their second-round series against the Ottawa Senators. Turning to Tanner Glass and his physical style.</p>
                                                <div class="comment-reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div>
                                            </div>
                                        </div>

                                    </article>
                                </li>

                                <!-- #comment-## -->
                            </ol>
                            <!-- .comment-list -->

                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Leave a comment</h3>
                                <form action="#" method="post" id="commentform" class="comment-form">
                                    <p class="logged-in-as">
                                        <a href="#">Logged in as admin</a>. <a href="#">Log out?</a>
                                    </p>
                                    <p class="comment-form-comment">
                                        <textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment*" required=""></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <input id="author" name="author" type="text" value="" size="30" placeholder="Name*" required="">
                                    </p>
                                    <p class="comment-form-email">
                                        <input id="email" name="email" type="text" value="" size="30" placeholder="Email*" required="">
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="btn" value="Post Comment">
                                    </p>
                                </form>
                            </div>
                            <!-- #respond -->

                        </div>

                    </main>
                    <!-- #main -->
                </div>

                <aside id="sidebar" class="widget-area primary-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <section id="search-2" class="widget widget_search">
                        <form role="search" method="get" id="search-form" class="search-form" action="#">
                            <input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s">
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                        </form>
                    </section>
                    <section id="categories-2" class="widget widget_categories">
                        <h4 class="widget-title">Categories</h4>
                        <ul>
                            <li><a href="#">Business</a></li>
                            <li class="cat-item cat-item-3"><a href="#">Consulting</a></li>
                            <li class="cat-item cat-item-4"><a href="#">Finacial</a></li>
                            <li class="cat-item cat-item-5"><a href="#">Franchising</a></li>
                            <li class="cat-item cat-item-6"><a href="#">Personal Injury</a></li>
                            <li class="cat-item cat-item-1"><a href="#">Uncategorized</a></li>
                        </ul>
                    </section>

                    <section id="archives-3" class="widget widget_archive">
                        <h4 class="widget-title">Archives</h4>
                        <label class="screen-reader-text" for="archives-dropdown-3">Archives</label>
                        <select id="archives-dropdown-3" name="archive-dropdown">

                            <option value="">Select Month</option>
                            <option value="#"> August 2018 </option>
                            <option value="#"> April 2018 </option>
                            <option value="#"> September 2017 </option>
                            <option value="#"> May 2017 </option>
                            <option value="#"> March 2017 </option>
                            <option value="#"> July 2016 </option>
                            <option value="#"> December 2015 </option>

                        </select>
                    </section>
                    <section id="tag_cloud-2" class="widget widget_tag_cloud">
                        <h4 class="widget-title">Tags</h4>
                        <div class="tagcloud"><a href="#">Advisor</a>
                            <a href="#">Agency</a>
                            <a href="#">Business</a>
                            <a href="#">Consuting</a>
                            <a href="#">Finacial</a>
                            <a href="#">Franchising</a></div>
                    </section>
                </aside>

            </div>
        </div>
    </div>
</div>





@endsection

@push('script')


@endpush
