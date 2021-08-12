@extends('layouts.guest')

@section('content')

    <div class="top_panel inversion">
        <div class="wrap">
            <div class="wrap_float">
                <div class="currency">
                    <select>
                        <option value="usd">usd</option>
                        <option value="eur">eur</option>
                        <option value="rub">rub</option>
                    </select>
                </div>
                <div class="left">
                    <div class="search_btn"></div>
                    <a href="/" class="logo">
                        <img src="img/logo-black.svg" alt="">
                    </a>
                </div>
                <div class="menu_wrap" id="menu_wrap">
                    <div class="scroll">
                        <div class="center">
                            <div class="menu">
                                <ul>
                                    <li><a href="/"><span>Home</span></a></li>
                                    <li class="dropdown_li">
                                        <a href="#" class="active"><span>Travel list</span></a>
                                        <ul class="dropdown_ul">
                                            <li><a href="travel-list-full-width.html">Travel list Full With</a></li>
                                            <li><a href="travel-list-right-sidebar.html">Travel list Right Sidebar</a></li>
                                            <li><a href="travel-list-left-sidebar.html">Travel list Left Sidebar</a></li>
                                            <li><a href="travel-list-image-header.html">Travel list Full With Image
                                                    Header</a></li>
                                            <li><a href="search-results.html">Search Result</a></li>
                                            <li><a href="search-results-not-found.html">Search Nothing Found</a></li>
                                            <li><a href="tour-page-right-sidebar.html">Tour page Right Sidebar</a></li>
                                            <li><a href="tour-page-left-sidebar.html">Tour page Left Sidebar</a></li>
                                            <li><a href="tour-page-right-sidebar-width-reply.html">Tour page with reply
                                                    form</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown_li">
                                        <a href="#"><span>Page</span></a>
                                        <ul class="dropdown_ul">
                                            <li><a href="stories-full-width.html">Stories Full With</a></li>
                                            <li><a href="story.html">Stories Single</a></li>
                                            <li><a href="stories-right-sidebar.html">Stories Right Sidebar</a></li>
                                            <li><a href="stories-left-sidebar.html">Stories Left Sidebar</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="gallery-single.html">Gallery Single</a></li>
                                            <li><a href="404.html">404 page</a></li>
                                            <li><a href="static-page-right-sidebar.html">Static Page Right Sidebar</a></li>
                                            <li><a href="static-page-left-sidebar.html">Static Page Left Sidebar</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown_li">
                                        <a href="#"><span>Blog</span></a>
                                        <ul class="dropdown_ul">
                                            <li><a href="blog-full-width.html">Blog Full With</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-search-results.html">Search Result</a></li>
                                            <li><a href="blog-search-results-not-found.html">Search Nothing Found</a></li>
                                            <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                            <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contacts.html"><span>Contacts</span></a></li>
                                </ul>
                                <div class="mobile_content">
                                    <div class="currency_mob">
                                        <select>
                                            <option value="usd">usd</option>
                                            <option value="rub">rub</option>
                                            <option value="eur">eur</option>
                                        </select>
                                        <p>
                                            Chosen currency
                                        </p>
                                    </div>
                                    <div class="tel">
                                        <a href="tel:+00344113457">+ 00 344 113 457 77</a>
                                        <p>Round the clock support</p>
                                    </div>
                                    <div class="social">
                                        <a href="#" class="link facebook"><span></span></a>
                                        <a href="#" class="link instagram"><span></span></a>
                                        <a href="#" class="link pinterest"><span></span></a>
                                        <a href="#" class="link twitter"><span></span></a>
                                        <a href="#" class="link youtube"><span></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="close" id="menu-close">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="tel"><a href="tel:+19092020119"><span>+ 1909 202 0119</span></a></div>
                            <a class="favorites-count" title="Favourites" href="favourites.html">
                                <div class="_counter">14</div>
                                <div class="_text">Favourites</div>
                            </a>
                        </div>
                        <div class="user" id="userblock">
                            <div class="userlink" id="userlink"></div>
                            <div class="usermenu" id="usermenu">
                                <ul>
                                    <li><a href="#" class="js-popup-open" data-href="#login">Login</a></li>
                                    <li><a href="#" class="js-popup-open" data-href="#registration">Registration</a></li>
                                    <li><a href="#" class="js-popup-open" data-href="#recovery-pass">Forgot password?</a>
                                    </li>
                                    <li><a href="#" class="js-popup-open" data-href="#profile-setting">Setting</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile_btn" id="mobile_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="#">Home</a>
                <span class="separator">/</span>
                <a href="#">Travel List Right Sidebar</a>
            </div>
        </div>
    </div>
    <div class="page travel-list right-sidebar">
        <div class="page_head">
            <div class="wrap_float">
                <div class="wrap">
                    <div class="wrap_float">
                        <h1 class="title">
                            Travel list Right Sidebar
                        </h1>
                        <p class="subtitle">
                            Latin literature from 45 BC, making it over 2000 years old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-tour">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="search-form">
                        <div class="destination-col">
                            <div class="label">Destination</div>
                            <div class="select_wrap">
                                <select>
                                    <option value="Destination" disabled selected>Destination</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                </select>
                            </div>
                        </div>
                        <div class="date-col">
                            <div class="label">Check In</div>
                            <div class="date_div">
                                <input type="text" class="js_calendar desctop-input">
                                <input type="date" class="mobile-input">
                                <div class="day">21</div>
                                <div class="date_div_right">
                                    <div class="month">December</div>
                                    <div class="year">2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="date-col">
                            <div class="label">Check Out</div>
                            <div class="date_div">
                                <input type="text" class="js_calendar desctop-input">
                                <input type="date" class="mobile-input">
                                <div class="day">21</div>
                                <div class="date_div_right">
                                    <div class="month">December</div>
                                    <div class="year">2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="num-col">
                            <div class="label">Aduld</div>
                            <div class="num_wrap">
                                <div class="buttons">
                                    <button class="plus"></button>
                                    <button class="minus"></button>
                                </div>
                                <input type="number" class="val js_num" value="3" min="0" max="99">
                            </div>
                        </div>
                        <div class="num-col last">
                            <div class="label">Children</div>
                            <div class="num_wrap">
                                <div class="buttons">
                                    <button class="plus"></button>
                                    <button class="minus"></button>
                                </div>
                                <input type="number" class="val js_num" value="3" min="0" max="99">
                            </div>
                        </div>
                        <button class="btn button"><span>Search</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_body">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="left_content">
                        <div class="posts">
                            <a href="tour-page-right-sidebar.html" class="item">
                                <div class="item_left">
                                    <div class="image" style="background-image: url(img/demo-bg.jpg)">
                                        <div class="shadow js-shadow"></div>
                                    </div>

                                </div>
                                <div class="item_right">
                                    <p class="country">North Africa</p>
                                    <div class="rating-stars">
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <h3 class="item_title">
                                        A trip to the mighty desert
                                    </h3>
                                    <p class="item_text">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt
                                    </p>
                                    <div class="info">
                                        <div class="days">5 days |</div>
                                        <div class="cost">from $356</div>
                                    </div>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                            </a>

                            <a href="tour-page-right-sidebar.html" class="item">
                                <div class="item_left">
                                    <div class="image" style="background-image: url(img/demo-bg.jpg)">
                                        <div class="shadow js-shadow"></div>
                                    </div>

                                </div>
                                <div class="item_right">
                                    <p class="country">United States of America</p>
                                    <div class="rating-stars">
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <h3 class="item_title">
                                        Antelope canyon in Arizona USA exclusive tour
                                    </h3>
                                    <p class="item_text">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit aspernatur aut odit aut fugit
                                    </p>
                                    <div class="info">
                                        <div class="days">5 days <span class="sale">Sale 23%</span></div>
                                        <div class="cost">from $356</div>
                                    </div>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                            </a>

                            <a href="tour-page-right-sidebar.html" class="item">
                                <div class="item_left">
                                    <div class="image" style="background-image: url(img/demo-bg.jpg)">
                                        <div class="shadow js-shadow"></div>
                                    </div>

                                </div>
                                <div class="item_right">
                                    <p class="country">The biggest part of the world</p>
                                    <div class="rating-stars">
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <h3 class="item_title">
                                        Asia
                                    </h3>
                                    <p class="item_text">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa
                                    </p>
                                    <div class="info">
                                        <div class="days">5 days <span class="sale">Sale 23%</span></div>
                                        <div class="cost">from $356</div>
                                    </div>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                            </a>

                            <a href="tour-page-right-sidebar.html" class="item">
                                <div class="item_left">
                                    <div class="image" style="background-image: url(img/demo-bg.jpg)">
                                        <div class="shadow js-shadow"></div>
                                    </div>

                                </div>
                                <div class="item_right">
                                    <p class="country">Iceland</p>
                                    <div class="rating-stars">
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <h3 class="item_title">
                                        Reykjavik
                                    </h3>
                                    <p class="item_text">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt
                                    </p>
                                    <div class="info">
                                        <div class="days">5 days |</div>
                                        <div class="cost">from $356</div>
                                    </div>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                            </a>

                            <a href="tour-page-right-sidebar.html" class="item">
                                <div class="item_left">
                                    <div class="image" style="background-image: url(img/demo-bg.jpg)">
                                        <div class="shadow js-shadow"></div>
                                    </div>

                                </div>
                                <div class="item_right">
                                    <p class="country">Iceland</p>
                                    <div class="rating-stars">
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star filled"></div>
                                        <div class="star"></div>
                                        <div class="star"></div>
                                    </div>
                                    <h3 class="item_title">
                                        Pink flamingos island
                                    </h3>
                                    <p class="item_text">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt
                                    </p>
                                    <div class="info">
                                        <div class="days">5 days |</div>
                                        <div class="cost">from $356</div>
                                    </div>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="pagination">
                            <a class="arrow prev"></a>
                            <ul>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                            <a class="arrow next"></a>
                        </div>
                    </div>
                    <div class="right_content sidebar">
                        <div class="search-tour">
                            <div class="search-form">
                                <div class="destination-col">
                                    <div class="label">Destination</div>
                                    <div class="select_wrap">
                                        <select>
                                            <option value="Africa">Africa</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Asia">Asia</option>
                                            <option value="Voronezh">Voronezh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="date-col">
                                    <div class="label">Check In</div>
                                    <div class="date_div">
                                        <input type="text" class="js_calendar desctop-input">
                                        <input type="date" class="mobile-input">
                                        <div class="day">21</div>
                                        <div class="date_div_right">
                                            <div class="month">December</div>
                                            <div class="year">2019</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="date-col">
                                    <div class="label">Check Out</div>
                                    <div class="date_div">
                                        <input type="text" class="js_calendar desctop-input">
                                        <input type="date" class="mobile-input">
                                        <div class="day">21</div>
                                        <div class="date_div_right">
                                            <div class="month">December</div>
                                            <div class="year">2019</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="num-col">
                                    <div class="label">Aduld</div>
                                    <div class="num_wrap">
                                        <div class="buttons">
                                            <button class="plus"></button>
                                            <button class="minus"></button>
                                        </div>
                                        <input type="number" class="val js_num" value="3" min="0" max="99">
                                    </div>
                                </div>
                                <div class="num-col last">
                                    <div class="label">Children</div>
                                    <div class="num_wrap">
                                        <div class="buttons">
                                            <button class="plus"></button>
                                            <button class="minus"></button>
                                        </div>
                                        <input type="number" class="val js_num" value="3" min="0" max="99">
                                    </div>
                                </div>
                                <button class="btn"><span>Search</span></button>
                            </div>
                        </div>
                        <div class="_block">
                            <h4 class="block_title">Interesting Stories</h4>
                            <div class="stories">
                                <div class="arrows">
                                    <div class="arrow prev"></div>
                                    <div class="arrow next"></div>
                                </div>
                                <div class="items" id="stories-slider">
                                    <a href="story.html" class="item" style="background-image: url(img/demo-bg.jpg)">
                                        <div class="flag">
                                            <img src="img/demo-bg.jpg" alt="">
                                        </div>
                                        <h5 class="_title">Madagascar</h5>
                                    </a>
                                    <a href="story.html" class="item" style="background-image: url(img/demo-bg.jpg)">
                                        <div class="flag">
                                            <img src="img/demo-bg.jpg" alt="">
                                        </div>
                                        <h5 class="_title">Maldives</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="_block">
                            <h4 class="block_title">
                                Popular travel
                            </h4>
                            <div class="popular">
                                <a href="tour-page-right-sidebar.html" class="item">
                                    <div class="item_top">
                                        <div class="img" style="background-image: url(img/demo-bg.jpg)"></div>
                                        <h5 class="_title">
                                            A trip to the mighty desert
                                        </h5>
                                    </div>
                                    <div class="item_bottom">
                                        <div class="days">5 days |</div>
                                        <div class="cost">from $356</div>
                                    </div>
                                </a>

                                <a href="tour-page-right-sidebar.html" class="item">
                                    <div class="item_top">
                                        <div class="img" style="background-image: url(img/demo-bg.jpg)"></div>
                                        <h5 class="_title">
                                            Antelope canyon in Arizona USA exclusive tour
                                        </h5>
                                    </div>
                                    <div class="item_bottom">
                                        <div class="days">5 days |</div>
                                        <div class="cost">from $356</div>
                                    </div>
                                </a>

                                <a href="tour-page-right-sidebar.html" class="item">
                                    <div class="item_top">
                                        <div class="img" style="background-image: url(img/demo-bg.jpg)"></div>
                                        <h5 class="_title">
                                            Asia
                                        </h5>
                                    </div>
                                    <div class="item_bottom">
                                        <div class="days">5 days |</div>
                                        <span class="sale">-23%</span>
                                        <div class="cost">from $356</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe_section">
        <div class="wrap">
            <div class="wrap_float">
                <div class="subscribe_block" style="background-image: url(img/demo-bg.jpg)">
                    <div class="left">
                        <h2 class="_title">Newslatters</h2>
                        <p class="_subtitle">Sign up to receive the best offers</p>
                    </div>
                    <div class="right">
                        <div class="input_wrap select_wrap">
                            <select>
                                <option value="Destination" disabled selected>Destination</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                            </select>
                        </div>
                        <div class="input_wrap">
                            <input type="email" class="input" placeholder="Email">
                        </div>
                        <button class="submit button"><span>Subscribe</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-block">
        <div class="wrap">
            <div class="wrap_float">
                <h2 class="title">Category description</h2>
                <p class="text">
                    But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
                    and I will give you a complete account of the system, and expound the actual teachings of the great
                    explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids
                    pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure
                    rationally encounter consequences that are extremely painful.
                </p>
            </div>
        </div>
    </div>
    <div class="instagram_posts">
        <div class="posts">
            <a class="post">
                <div class="sq_parent">
                    <div class="sq_wrap">
                        <div class="sq_content">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <a class="post">
                <div class="sq_parent">
                    <div class="sq_wrap">
                        <div class="sq_content">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <a class="post">
                <div class="sq_parent">
                    <div class="sq_wrap">
                        <div class="sq_content">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <a class="post">
                <div class="sq_parent">
                    <div class="sq_wrap">
                        <div class="sq_content">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <a class="post">
                <div class="sq_parent">
                    <div class="sq_wrap">
                        <div class="sq_content">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="footer">
        <div class="wrap">
            <div class="wrap_float">
                <div class="footer_top">
                    <div class="left">
                        <div class="col">
                            <div class="_title m_title">Travel list</div>
                            <ul>
                                <li><a href="travel-list-full-width.html">Travel list Full With</a></li>
                                <li><a href="travel-list-right-sidebar.html">Travel list Right Sidebar</a></li>
                                <li><a href="travel-list-left-sidebar.html">Travel list Left Sidebar</a></li>
                                <li><a href="travel-list-image-header.html">Travel list Full With Image Header</a></li>
                                <li><a href="search-results.html">Search Result</a></li>
                                <li><a href="search-results-not-found.html">Search Nothing Found</a></li>
                                <li><a href="tour-page-right-sidebar.html">Tour page Right Sidebar</a></li>
                                <li><a href="tour-page-left-sidebar.html">Tour page Left Sidebar</a></li>
                                <li><a href="tour-page-right-sidebar-width-reply.html">Tour page with reply form</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="_title m_title">Page</div>
                            <ul>
                                <li><a href="stories-full-width.html">Stories Full With</a></li>
                                <li><a href="story.html">Stories Single</a></li>
                                <li><a href="stories-right-sidebar.html">Stories Right Sidebar</a></li>
                                <li><a href="stories-left-sidebar.html">Stories Left Sidebar</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="gallery-single.html">Gallery Single</a></li>
                                <li><a href="404.html">404 page</a></li>
                                <li><a href="static-page-right-sidebar.html">Static Page Right Sidebar</a></li>
                                <li><a href="static-page-left-sidebar.html">Static Page Left Sidebar</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="_title m_title">Blog</div>
                            <ul>
                                <li><a href="blog-full-width.html">Blog Full With</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-search-results.html">Search Result</a></li>
                                <li><a href="blog-search-results-not-found.html">Search Nothing Found</a></li>
                                <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="_title">Contacts</div>
                        <div class="contacts_info">
                            <div class="tel">
                                <a href="tel:+19092020119">+ 1909 202 0119</a>
                                <p>Round the clock support</p>
                            </div>
                            <div class="email">
                                <a href="mailto:info@hellodigi.ru">info@hellodigi.ru</a>
                                <p>For any questions</p>
                            </div>
                            <div class="address">
                                1355 Digistrict St, Suite 909 San, Francisco, CA 10001 <br> United States
                            </div>
                        </div>
                        <div class="socials social-links">
                            <a href="#" class="link facebook"><span></span></a>
                            <a href="#" class="link instagram"><span></span></a>
                            <a href="#" class="link pinterest"><span></span></a>
                            <a href="#" class="link twitter"><span></span></a>
                            <a href="#" class="link youtube"><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="left">
                        <a href="#">Privacy Policy</a>
                    </div>
                    <div class="right">
                        Copyright © 2019 by Digistrict
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal_search" id="modal_search">
        <div class="close"></div>
        <div class="search-tour">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="search-form">
                        <div class="destination-col">
                            <div class="label">Destination</div>
                            <div class="select_wrap">
                                <select>
                                    <option value="Destination" disabled selected>Destination</option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                </select>
                            </div>
                        </div>
                        <div class="date-col">
                            <div class="label">Check In</div>
                            <div class="date_div">
                                <input type="text" class="js_calendar desctop-input">
                                <input type="date" class="mobile-input">
                                <div class="day">21</div>
                                <div class="date_div_right">
                                    <div class="month">December</div>
                                    <div class="year">2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="date-col">
                            <div class="label">Check Out</div>
                            <div class="date_div">
                                <input type="text" class="js_calendar desctop-input">
                                <input type="date" class="mobile-input">
                                <div class="day">21</div>
                                <div class="date_div_right">
                                    <div class="month">December</div>
                                    <div class="year">2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="num-col">
                            <div class="label">Aduld</div>
                            <div class="num_wrap">
                                <div class="buttons">
                                    <button class="plus"></button>
                                    <button class="minus"></button>
                                </div>
                                <input type="number" class="val js_num" value="3" min="0" max="99">
                            </div>
                        </div>
                        <div class="num-col last">
                            <div class="label">Children</div>
                            <div class="num_wrap">
                                <div class="buttons">
                                    <button class="plus"></button>
                                    <button class="minus"></button>
                                </div>
                                <input type="number" class="val js_num" value="3" min="0" max="99">
                            </div>
                        </div>
                        <button class="btn button">
                            <span>Search</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="popup login" id="login">
        <div class="scroll">
            <div class="scroll_wrap">
                <div class="popup-head">
                    <div class="title">Sign In</div>
                    <a class="link js-popup-open" data-href="#registration">Sign Up</a>

                </div>
                <div class="popup-body">
                    <div class="subtitle">
                        Use the e-mail and password that you specified when registering on the site
                    </div>
                    <div class="form">
                        <input type="text" class="input" placeholder="Login">
                        <input type="text" class="input" placeholder="Password">
                        <button class="submit button">Sign In</button>
                        <a href="#" class="link">Forgot password?</a>
                    </div>
                </div>
                <div class="popup-foot">
                    <p>Login via social networks</p>
                    <div class="social-links">
                        <a href="#" class="link facebook"><span></span></a>
                        <a href="#" class="link twitter"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="close"></div>
    </div>


    <div class="popup registration" id="registration">
        <div class="scroll">
            <div class="scroll_wrap">
                <div class="popup-head">
                    <div class="title">Sign Up</div>
                    <a class="link js-popup-open" data-href="#login">Sign In</a>

                </div>
                <div class="popup-body">
                    <div class="subtitle">
                        Fill in the registration form and save your favorite tours, synchronize them on all devices
                    </div>
                    <div class="form">
                        <input type="text" class="input" placeholder="Username">
                        <input type="text" class="input" placeholder="Name">
                        <input type="text" class="input" placeholder="Surename">
                        <input type="email" class="input" placeholder="Email">
                        <input type="password" class="input" placeholder="Password">
                        <input type="password" class="input" placeholder="Password Repeat">
                        <button class="submit button js-submit">Registration</button>
                    </div>
                </div>
                <div class="popup-foot">
                    <p>Sign Up via social networks</p>
                    <div class="social-links">
                        <a href="#" class="link facebook"><span></span></a>
                        <a href="#" class="link twitter"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="close"></div>
    </div>


    <div class="popup forgot-pass" id="recovery-pass">
        <div class="scroll">
            <div class="scroll_wrap">
                <div class="popup-head">
                    <div class="title">Forgot password?</div>
                </div>
                <div class="popup-body">
                    <div class="subtitle">
                        Use the e-mail and password that you specified when registering on the site
                    </div>
                    <div class="form">
                        <input type="email" class="input" placeholder="Email">
                        <button class="submit button js-submit">Reset password</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="close"></div>
    </div>


    <div class="popup profile-setting" id="profile-setting">
        <div class="scroll">
            <div class="scroll_wrap">
                <div class="select-userpic">
                    <div class="userpic">V</div>
                    <div class="select">
                        <input type="file" id="profile-pic">
                        <label for="profile-pic">Select photo</label>
                    </div>
                </div>
                <div class="popup-head">
                    <div class="title">Setting</div>
                </div>
                <div class="popup-body">
                    <div class="form">
                        <input type="text" class="input" placeholder="Username" value="Victor777">
                        <input type="text" class="input" placeholder="Name" value="Victor">
                        <input type="text" class="input" placeholder="Surename" value="Shibut">
                        <input type="email" class="input" placeholder="Email" value="test@test.com">
                        <div class="label">Change password</div>
                        <input type="password" class="input" placeholder="Current password">
                        <input type="password" class="input" placeholder="Enter new password">
                        <input type="password" class="input" placeholder="New password repeat">
                        <div class="label">Authorization through social networks</div>
                        <div class="social-links">
                            <a href="#" class="link facebook active"><span></span></a>
                            <a href="#" class="link twitter"><span></span></a>
                        </div>
                        <button class="submit button js-submit">Save Setting</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="close"></div>
    </div>


    <div class="popup contact-us" id="contact-us">
        <div class="scroll">
            <div class="scroll_wrap">
                <div class="popup-head">
                    <div class="title">Contact Us</div>
                </div>
                <div class="popup-body">
                    <div class="subtitle">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                    </div>
                    <div class="form">
                        <input type="text" class="input" placeholder="Name">
                        <input type="email" class="input" placeholder="Email">
                        <input type="text" class="input" placeholder="Phone">
                        <textarea class="textarea" placeholder="Your Massage"></textarea>
                        <button class="submit button js-submit">Send Massage</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="close"></div>
    </div>

    <div class="popup book-now-popup" id="book-now">
        <div class="scroll">
            <div class="scroll_wrap">
                <div class="popup-head">
                    <div class="title">Book Now</div>
                </div>
                <div class="popup-body">
                    <div class="tour-title">
                        <div class="img">
                            <img src="img/demo-bg.jpg" alt="">
                        </div>
                        <div class="tour-name">
                            Tour to the Arctic is an exotic journey on the verge of extreme
                        </div>
                    </div>
                    <div class="tour-info">
                        <div class="col">
                            <div class="label">Check In</div>
                            <div class="date">
                                <div class="day">09</div>
                                <div class="month">May</div>
                                <div class="year">2019</div>
                            </div>
                            <div class="label">Aduld: <span>3</span></div>
                        </div>
                        <div class="col">
                            <div class="label">Check Out</div>
                            <div class="date">
                                <div class="day">09</div>
                                <div class="month">May</div>
                                <div class="year">2019</div>
                            </div>
                            <div class="label">Children: <span>0</span></div>
                        </div>
                    </div>
                    <div class="form">
                        <input type="text" class="input" placeholder="Your First Name">
                        <input type="text" class="input" placeholder="Your Last Name">
                        <input type="email" class="input" placeholder="Your Email">
                        <input type="tel" class="input" placeholder="Your Number Phone">
                        <textarea class="textarea" placeholder="Where are your address?"></textarea>
                        <textarea class="textarea" placeholder="Note:"></textarea>
                        <button class="submit button js-submit">Book Now | <b>$356</b></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="close"></div>
    </div>

    <div class="popup success-popup" id="contact-us-success">
        <div class="scroll">
            <div class="scroll_wrap">
                <div class="popup-head">
                    <div class="title">Success</div>
                </div>
                <div class="popup-body">
                    <div class="subtitle">
                        Your message was successfully sent. We will contact you shortly
                    </div>
                </div>
            </div>
        </div>
        <div class="close"></div>
    </div>

@endsection
