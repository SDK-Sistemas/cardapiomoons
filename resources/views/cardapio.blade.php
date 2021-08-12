@extends('layouts.guest')

@section('content')

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

@endsection
