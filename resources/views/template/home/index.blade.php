@extends('layouts.main')

@section('content')
<section class="event_banner_area">
    <div class="parallax-effect"></div>
    <div class="container">
        <div class="row banner_main">
            <div class="container">
                <div class="slider_header">
                    <!-- Banner 1: Định Hướng Thương Hiệu Tech -->
                    <div class="items">
                        <div class="row">
                            <div class="col-lg-6 col-12 event_banner_content">
                                <h6 class="">Xây dựng Thương Hiệu chuyên nghiệp cùng Wind Lập Trình</h6>
                                <h2 class="">Thúc đẩy định vị thương hiệu của bạn trong lĩnh vực công nghệ, tối ưu hóa trải nghiệm người dùng với các ứng dụng và giải pháp web hiện đại, giúp thương hiệu của bạn nổi bật trên thị trường.</h2>
                                <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                                    href="#information-form"><img src="{{ asset('images/icon/icon-phone.png') }}"
                                        alt="Đăng ký tư vấn">Đăng ký tư vấn
                                </a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <img class="img_bg_banner" src="{{ asset('images/banner/brand-tech.png') }}"
                                    alt="Banner xây dựng thương hiệu công nghệ">
                            </div>
                        </div>
                    </div>

                    <div class="items">
                        <div class="row">
                            <div class="col-lg-6 col-12 event_banner_content">
                                <h6 class="">Giải pháp Đa Nền Tảng Thương Mại Điện Tử từ Wind Lập Trình</h6>
                                <h2 class="">Tiếp cận khách hàng trên mọi kênh với dịch vụ thiết kế website, mini app, TikTok Shop và Shopee từ Wind Lập Trình. Tối ưu hóa trải nghiệm mua sắm đa nền tảng, gia tăng hiệu quả bán hàng và xây dựng thương hiệu mạnh mẽ trên các kênh trực tuyến.</h2>
                                <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                                   href="#information-form"><img src="{{ asset('images/icon/icon-phone.png') }}"
                                   alt="Đăng ký tư vấn">Đăng ký tư vấn
                                </a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <img class="img_bg_banner" src="{{ asset('images/banner/ecommerce-platforms.png') }}"
                                     alt="Banner giải pháp thương mại điện tử đa nền tảng">
                            </div>
                        </div>
                    </div>
                    

                    <!-- Banner 3: Mini App trên Zalo -->
                    <div class="items">
                        <div class="row">
                            <div class="col-lg-6 col-12 event_banner_content">
                                <h6 class="">Khởi tạo <span>Mini App trên Zalo</span> cho thương hiệu của bạn</h6>
                                <h2 class="">Tăng cường chăm sóc khách hàng trên nền tảng Zalo, hỗ trợ mua sắm và booking dễ dàng. Mở rộng tệp khách hàng trung thành với giải pháp Affiliate Marketing tiên tiến.</h2>
                                <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                                    href="#information-form"><img src="{{ asset('images/icon/icon-phone.png') }}"
                                        alt="Đăng ký tư vấn Mini App trên Zalo">Đăng ký tư vấn
                                </a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <img class="img_bg_banner" src="{{ asset('images/banner/zalo-mini-app.png') }}"
                                    alt="Banner Mini App Zalo từ Wind Lập Trình">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



    <section class="four_post_bottom_banner">
        <div class="container">
            <div class="row">
                <!-- Thiết kế Website -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('./images/storyset/website.png') }}" alt="Thiết kế Website Wind Lập Trình"
                                title="Thiết kế Website">
                        </div>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="#" title="Thiết kế Website">Thiết kế
                                    Website</a></h3>
                            <p>Thiết kế website chuyên nghiệp, tối ưu hóa SEO và giao diện thân thiện, tích hợp tính năng
                                như tích điểm, ưu đãi, và thông báo tự động để tăng tương tác với khách hàng.</p>
                            <a target="_self" class="smooth more" href="#nganh-hang"
                                title="Xem thêm về thiết kế website">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <!-- Mini App -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('./images/storyset/mini-app.png') }}" alt="Mini App Wind Lập Trình"
                                title="Mini App">
                        </div>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="#" title="Mini App">Mini App</a></h3>
                            <p>Tạo Mini App thương hiệu riêng trên Zalo, giúp doanh nghiệp kết nối khách hàng dễ dàng. Nâng
                                cao trải nghiệm người dùng ngay trên nền tảng Zalo hiệu quả và tiện lợi.</p>
                            <a target="_self" class="smooth more"
                                href="https://www.taominiapp.com/?utm_source=website_cnvloyalty&utm_medium=widget_trangchu&utm_campaign=zalominiapp"
                                title="Xem thêm về Mini App">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <!-- Thiết kế Software -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('./images/storyset/sofware.png') }}" alt="Thiết kế Software Wind Lập Trình"
                                title="Thiết kế Software">
                        </div>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="#" title="Thiết kế Software">Thiết kế
                                    Software</a></h3>
                            <p>Xây dựng phần mềm quản lý dữ liệu khách hàng thông minh, hỗ trợ doanh nghiệp hiểu rõ hành vi
                                khách hàng và đưa ra chiến lược phát triển dựa trên dữ liệu thực tế.</p>
                            <a target="_self" class="smooth more" href="javascript:void(0)"
                                title="Xem thêm về thiết kế Software">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <!-- Brand Tech -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 item_post_featured_banner four_post_bottom_banner_desktop">
                    <div class="item">
                        <div class="img">
                            <img src="{{ asset('./images/storyset/brand.png') }}" alt="Brand Tech Wind Lập Trình"
                                title="Brand Tech">
                        </div>
                        <div class="ct">
                            <h3 class="title"><a class="smooth" href="#" title="Brand Tech">Brand Tech</a></h3>
                            <p>Giải pháp công nghệ toàn diện giúp doanh nghiệp xây dựng và phát triển thương hiệu, bao gồm
                                nhận diện thương hiệu số và tối ưu hóa hoạt động kỹ thuật số.</p>
                            <a target="_self" class="smooth more" href="#app-nen-tang"
                                title="Xem thêm về Brand Tech">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner" id="khach-hang" data-animate-in="fadeIn">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Hơn 60+ doanh nghiệp đã sử dụng Solution Marketing</h2>
                <p>
                    <span style="font-family: arial, helvetica, sans-serif;">
                        Để xây dựng thương hiệu hiệu quả, gia tăng doanh thu, đầy
                        đủ thông tin trên mọi nền tảng e-commerce
                    </span>
                </p>
            </div>
            <div class="customers_partner customers_partner_desktop">
                <div class="li">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/usanaillasvegas.png') }}></a>

                </div>
                <div class="li">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/hellonailsbar.jpg') }}></a>

                </div>
                <div class="li">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/chailotrucho.png') }}></a>

                </div>
                <div class="li">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/sunmarketingservice.png') }}></a>

                </div>
                <div class="li">
                    <a href="http://demo.cnvloyalty.com/blogs/case-study-dien-hinh"><img class="lazy"
                            data-src={{ asset('./images/logo/vsnailstudioiowa.jpg') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/victorianailspamorganhill.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/phutungdoanlong.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/gennailsspaoh.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/topartnails.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/margaritanail.jpg') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/venetiannailsspakaty.jpg') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/logomimosa.jpg') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/acqualuxenailsspachevychase.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/starnailsspaelcajon.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/comboluxurynailsandspa.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/deluxenailspasaco.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/casaviet.png') }}></a>

                </div>
                <div class="li">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/easternmarketnails.png') }}></a>

                </div>
            </div>

            <div class="customers_partner customers_partner_mobile">
                <div class="item">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/usanaillasvegas.png') }}></a>
                </div>
                <div class="item">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/easternmarketnails.png') }}></a>
                </div>
                <div class="item">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/casaviet.png') }}></a>
                </div>
                <div class="item">
                    <a href="blogs/case-study-dien-hinh.html"><img class="lazy"
                            data-src={{ asset('./images/logo/deluxenailspasaco.png') }}></a>
                </div>
                <div class="item">
                    <a href="http://demo.cnvloyalty.com/blogs/case-study-dien-hinh"><img class="lazy"
                            data-src={{ asset('./images/logo/comboluxurynailsandspa.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/starnailsspaelcajon.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/acqualuxenailsspachevychase.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/logomimosa.jpg') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/venetiannailsspakaty.jpg') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/margaritanail.jpg') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/topartnails.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/gennailsspaoh.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/phutungdoanlong.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/victorianailspamorganhill.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/chailotrucho.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/vsnailstudioiowa.jpg') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy"
                            data-src={{ asset('./images/logo/sunmarketingservice.png') }}></a>
                </div>
                <div class="item">
                    <a href=""><img class="lazy" data-src={{ asset('./images/logo/hellonailsbar.jpg') }}></a>
                </div>
            </div>
        </div>
    </section>
    <section class="you_choose_cnv">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Lý do bạn nên chọn Wind Lập Trình</h2>
            </div>
            <div class="row">
                <div class="portfolio_choose_cnv">
                    <div class="img">
                        <a data-toggle="modal" data-target="#informationForm" href="#information-form"><img
                                src={{ asset('./images/storyset/task.png') }} class="lazy" alt=""
                                width="676" height="598"></a>
                    </div>
                    <div class="items">
                        <div class="item">
                            <h2>Marketing</h2>
                            <span>Chuyên cung cấp giải pháp thương hiệu toàn diện với hơn 40+ khách hàng hài lòng, giúp
                                doanh nghiệp xây dựng dấu ấn khác biệt.
                            </span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Chi phí tối ưu</h2>
                            <span>
                                Với mức giá chỉ từ 20.000.000đ, bạn có thể sở hữu giải pháp thương mại điện tử đa nền tảng
                                bao gồm website, Zalo Mini App, TikTok, Instagram, Shopee và nhiều nền tảng khác, tối ưu hóa
                                đầu tư và tăng khả năng tiếp cận khách hàng.
                            </span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Bran Tech</h2>
                            <span>Thời gian định hình thương hiệu nhanh chóng chỉ trong 2 tháng, giúp bạn sẵn sàng mở rộng
                                và phát triển thương hiệu trên nhiều nền tảng khác nhau.</span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Công nghệ</h2>
                            <span>
                                Wind Lập Trình luôn tiên phong áp dụng công nghệ mới nhất để tối ưu hóa hiệu quả vận hành
                                thương hiệu, giúp doanh nghiệp duy trì lợi thế cạnh tranh.
                            </span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Hệ thống vận hành</h2>
                            <span>
                                Wind Lập Trình cập nhật liên tục các giải pháp marketing tiên tiến, đảm bảo doanh nghiệp của
                                bạn thu hút và giữ chân khách hàng tiềm năng.
                            </span>
                        </div>
                        <div class="item">
                            <h2 class="title smooth">Thế hệ GenZ</h2>
                            <span>
                                Đội ngũ Gen Z sáng tạo và năng động, mang đến sự linh hoạt và tư duy mới mẻ trong việc áp
                                dụng công nghệ hiện đại.
                            </span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="app_nen_tang" id="app-nen-tang">
        <div class="container">
            <div class="headbox">
                <h2 class="title">E-commerce Solutions</h2>
                <p>Giải pháp toàn diện giúp doanh nghiệp phát triển ứng dụng web, Mini App và phần mềm quản lý khách hàng hiệu quả.</p>
            </div>
            <div class="row">
                <div class="col-lg-9 offset-lg-3 group_tab_app_nen_tang">
                    <ul class="nav_app nav">
                        <li>
                            <a data-toggle="tab" class="smooth active" href="#tab1" title="">Website, Mini App</a>
                        </li>

                        <li>
                            <a data-toggle="tab" class="smooth " href="#tab2" title="">Brand Tech</a>
                        </li>

                        <li>
                            <a data-toggle="tab" class="smooth " href="#tab3" title="">Sofware Manager</a>
                        </li>
                    </ul>
                </div>

                <div class="row group_content_he_sinh_thai">


                    <div class="col-lg-3 thumbnail_app">
                        <img src={{asset("./images/storyset/data.png")}} alt="">
                        <p class="title-solution-ecommerce">Giải pháp về thương mại điện tử</p>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="item_tab tab-pane fade active show" id="tab1">
                                <div class="row">
                                    <div class="col-lg-5 thumbnail_app_img">
                                        <img class="lazy" data-src={{asset("./images/solution/desgin-website.png")}}
                                            alt="">
                                    </div>
                                    <div class="col-lg-7 group_content_app">
                                        <div class="content">
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">Ứng dụng được thiết kế với khả năng mở rộng, dễ dàng tích hợp thêm các tính năng mới và phù hợp với sự phát triển của doanh nghiệp trong tương lai.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Đảm bảo tốc độ nhanh và ổn định, mang đến trải nghiệm liền mạch dù trên website hay Mini App.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">  Ứng dụng được cá nhân hóa theo phong cách thương hiệu, giúp xây dựng sự nhận diện và gắn kết với khách hàng..</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Cung cấp tính năng như đặt hàng, lịch hẹn, theo dõi ưu đãi, và quản lý tài khoản trực tiếp trên ứng dụng.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Hỗ trợ doanh nghiệp cập nhật thông tin và theo dõi lịch sử khách hàng, giúp quản lý dễ dàng và chính xác.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Thông tin khách hàng được bảo vệ tối đa, giúp người dùng yên tâm khi sử dụng dịch vụ và giao dịch.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item_tab tab-pane fade" id="tab2">
                                <div class="row">
                                    <div class="col-lg-5 thumbnail_app_img">
                                        <img class="image-desgin-item" src={{asset("./images/solution/brand-tech.png")}} alt="">
                                    </div>
                                    <div class="col-lg-7 group_content_app">
                                        <div class="content">
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Nhận thông tin đặt lịch, đặt hàng nhanh chóng
                                                từ khách
                                                hàng</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Nhận thông báo khi có nhiệm vụ mới cần xử lý
                                            </p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Thực hiện nhiệm vụ, chụp hình trạng thái khách,
                                                trước và
                                                sau khi phục vụ </p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Quản lý, phân loại, xem báo cáo danh sách khách
                                                hàng đã/
                                                đang/ sẽ phục vụ, từ đó đưa ra những quyết định phù hợp.</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt=""> Đơn giản hoá, tiết kiệm thời gian các công việc
                                                liên
                                                quan đến thống kê, báo cáo, ... giúp việc quy trình vận hành tại chi
                                                nhánh tinh giản, hiệu quả</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item_tab tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-lg-5 thumbnail_app_img">
                                        <img src={{asset('./images/storyset/manager-sofware.png')}} alt="">
                                    </div>
                                    <div class="col-lg-7 group_content_app">
                                        <div class="content">
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">Phần mềm được xây dựng với tốc độ xử lý nhanh và khả năng vận hành mượt mà</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">Hỗ trợ đồng bộ trên website, ứng dụng di động, và các nền tảng khác</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">Thiết kế theo yêu cầu riêng của từng doanh nghiệp, đảm bảo phù hợp với mục tiêu kinh doanh</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">Sử dụng công nghệ hiện đại để bảo vệ dữ liệu an toàn tối đa</p>
                                            <p><img class="lazy"
                                                    data-src={{asset("./images/icon/check.png")}}
                                                    alt="">Bảo trì và nâng cấp phần mềm đáp ứng nhu cầu phát triển của doanh nghiệp</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="service-wind" id="nganh-hang">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Các Solution Service của Wind Lập Trình</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav_app nav">
                        <li>
                            <a data-toggle="tab" class="smooth active" href="#app-nganh-retail" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-ban-le.png"
                                    alt="">
                                BranTech
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#app-nganh-f-b" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-fb.png" alt="">
                                Website
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#app-nganh-fitness" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-fitness.png"
                                    alt="">
                                Sofware
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#app-nganh-spa" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-spa.png" alt="">
                                Content Manager
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" class="smooth " href="#app-nganh-auto" title="">
                                <img class="icon_app lazy" data-src="storage/nghanh-hang/nghanh-auto.png" alt="">
                               SEO Google
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="item_tab tab-pane fade active show" id="app-nganh-retail">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src={{asset("./images/service/bran-tech.png")}} alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Giải pháp BrandTech áp dụng cho thương hiệu của bạn</h2>
                                    <div class="content">
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Tích hợp chương trình khách hàng thân thiết, tích điểm, đổi quà, và cập nhật khuyến mãi ngay trên app, giúp tăng độ trung thành và gắn kết.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Xây dựng nền tảng thương mại điện tử kết hợp website, Mini App, và các công cụ như CRM, POS, ERP, giúp quản lý đơn hàng và thanh toán mượt mà trên mọi nền tảng.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Tính năng cấp mã bảo hành online và tìm kiếm cửa hàng gần nhất, hiện đại hóa trải nghiệm khách hàng và nâng cao hình ảnh thương hiệu trên thị trường.
                                            </span>
                                        </p>
                                       
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-retail.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="app-nganh-f-b">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src={{asset('./images/service/desgin-website.png')}} alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Thiết kế Website theo yêu cầu của Khách hàng</h2>
                                    <div class="content">
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Xây dựng giao diện độc đáo, phù hợp với ngành nghề và yêu cầu của khách hàng, đảm bảo nhận diện thương hiệu nổi bật trên mọi nền tảng.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Thiết kế website với cấu trúc chuẩn SEO, tốc độ tải nhanh và giao diện thân thiện trên cả desktop lẫn thiết bị di động, giúp tăng cường khả năng xuất hiện trên công cụ tìm kiếm.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Kết nối các tính năng hiện đại như Mini App, CRM, và cổng thanh toán, tạo nên hệ sinh thái quản lý bán hàng hiệu quả, đáp ứng mọi nhu cầu kinh doanh.
                                            </span>
                                        </p>
                                        
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-f-b.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="app-nganh-fitness">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src={{asset("./images/service/desgin-sofware.png")}} alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Thiết kế Sofware theo yêu cầu của Khách hàng</h2>
                                    <div class="content">
                                        <p>
                                            <img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Tạo phần mềm tùy chỉnh đáp ứng chính xác quy trình vận hành và mục tiêu kinh doanh của từng khách hàng, đảm bảo tối ưu hóa hiệu quả sử dụng.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Ứng dụng các công nghệ tiên tiến, đảm bảo phần mềm hoạt động ổn định, bảo mật cao và dễ dàng tích hợp với các hệ thống khác như CRM, ERP, và POS.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Thiết kế giao diện thân thiện, dễ sử dụng, nâng cao trải nghiệm người dùng, giúp khách hàng quản lý và vận hành hiệu quả hơn trên mọi thiết bị.
                                            </span>
                                        </p>
                                        
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-fitness.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="app-nganh-spa">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src={{asset('./images/service/content-manager.png')}} alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Sáng tạo nội dung chuẩn Marketing, SEO cho thương hiệu của bạn</h2>
                                    <div class="content">
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Xây dựng nội dung sáng tạo, phù hợp với ngành nghề và mục tiêu kinh doanh, đảm bảo chuẩn SEO để tăng thứ hạng trên công cụ tìm kiếm, thu hút nhiều lượt truy cập chất lượng.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Lên kế hoạch nội dung tập trung vào đúng đối tượng mục tiêu, kết hợp yếu tố marketing để tạo sự hấp dẫn, thúc đẩy chuyển đổi và xây dựng hình ảnh thương hiệu chuyên nghiệp.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Quản lý và triển khai nội dung trên website, mạng xã hội, Mini App, và các nền tảng khác, đảm bảo thông điệp thương hiệu được truyền tải nhất quán và hiệu quả.
                                            </span>
                                        </p>
                                        
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-spa.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item_tab tab-pane fade " id="app-nganh-auto">
                            <div class="row">
                                <div class="col-lg-5 thumbnail_app">
                                    <img class="lazy" data-src={{asset("./images/service/seo-key.png")}} alt="">
                                </div>
                                <div class="col-lg-7 group_content_app">

                                    <h2 class="title_app">Sáng tạo nội dung chiến lược – Giải pháp tối ưu tại Wind Lập Trình</h2>
                                    <div class="content">
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Đưa ra các keyword phù hợp xu hướng tìm kiếm, đảm bảo nội dung đáp ứng nhu cầu của khách hàng và tăng khả năng đạt top Google.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Phát triển nội dung mới lạ, chất lượng cao, phù hợp với lĩnh vực kinh doanh và tạo sức hút mạnh mẽ cho thương hiệu.
                                            </span>
                                        </p>
                                        <p><img src={{asset("./images/icon/check.png")}} alt="">
                                            <span>
                                                Đảm bảo nội dung được tối ưu từ tiêu đề, thẻ meta, đến cấu trúc bài viết, giúp tăng thứ hạng website trên các công cụ tìm kiếm.
                                            </span>
                                        </p>
                                        
                                    </div>
                                    <div class="view_app_details">
                                        <a href="job_apps/app-nganh-auto.html">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>

                <div class="col-lg-12 group_link_dang_ky">
                    <a class="event_btn btn_hover" data-toggle="modal" data-target="#informationForm"
                        href="#information-form"><img class="lazy" data-src={{ asset('images/icon/icon-phone.png') }}
                            alt="">Đăng ký tư vấn</a>
                </div>
            </div>
        </div>
    </section>
   
    <section class="talk_cnv">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Doanh nghiệp nói về Wind Lập Trình</h2>
            </div>
            <div class="talk-cnv-cas">
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/tomoorder.png')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/chailotrucho.png')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/phutungdoanlong.png')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/giaphanviet.jpg')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/sunmarketingservice.png')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/usanaillasvegas.png')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/casaviet.png')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/margaritanail.jpg')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/happynailswilson.png')}} alt="">
                    </a>
                </div>
                <div class="items">
                    <a href="">
                        <img class="lazy" data-src={{asset('./images/logo/starnailsspaelcajon.png')}} alt="">
                    </a>
                </div>
            </div>


        </div>

        <div class="container_group_post_talk_cnv">
            <div class="container container_post_talk_cnv">
                <div class="row">


                    <div class="cnv-md-post col-lg-6">

                        <div class="ct">
                            <h3 class="title_news"></h3>
                            <h3 class="title"><a class="smooth"
                                    href="#"
                                    title="">Công Ty Phát Triển Công Nghiệp TOMO Việt Nam</a></h3>
                            <div class="description">Wind Lập Trình là đội ngủ sáng tạo sản phẩm công nghệ còn khá mới,
                                nhưng và họ thấy sự khác biệt của thế hệ GenZ trong sự sáng tạo đi đầu về công nghệ rất
                                vui được hợp tác với các bạn.
                            </div>
                        </div>
                        <a class="img"
                            href="#"
                            title="">
                            <img class="lazy" data-src={{asset('./images/customer/tomoorder.png')}} alt=""
                                title="">
                        </a>
                    </div>
                    <div class="cnv-md-post col-lg-6">

                        <div class="ct">
                            <h3 class="title_news"></h3>
                            <h3 class="title"><a class="smooth"
                                    href="#"
                                    title="">Nhà hàng Casa Viet Tây Ba Nha</a></h3>
                            <div class="description">Giải pháp Marketing về website bên Wind rất hiệu quả trong việc sáng tạo nội dung, 
                                hỗ trợ brand đưa ra các giải pháp phù hợp, sáng tạo keyword chuẩn SEO cho website hiệu quả rõ rệt, cảm ơn các bạn đã hỗ trợ brantech.</div>
                        </div>
                        <a class="img"
                            href="#"
                            title="">
                            <img class="lazy" data-src={{asset('./images/customer/casaviet.jpg')}} alt=""
                                title="">
                        </a>
                    </div>
                    <div class="cnv-md-post col-lg-6">

                        <div class="ct">
                            <h3 class="title_news"></h3>
                            <h3 class="title"><a class="smooth"
                                    href=""
                                    title="">Phụ Tùng Oto Đoàn Long</a></h3>
                            <div class="description">Thương hiệu của tôi đã có trên thị trường Việt Nam rất lâu nhưng mà chưa có website,
                                khi biết tới Wind Lập Trình được các bạn trẻ sáng tạo brand cho tôi bên cạnh đó còn tích hợp sáng tạo keyword chuẩn SEO,
                                tích hợp trên các công cụ tiềm kiếm như google...
                            </div>
                        </div>
                        <a class="img"
                            href=""
                            title="">
                            <img class="lazy" data-src={{asset('./images/customer/phutungdoanlong.jpg')}}
                                alt="" title="">
                        </a>
                    </div>
                    <div class="cnv-md-post col-lg-6">

                        <div class="ct">
                            <h3 class="title_news"></h3>
                            <h3 class="title"><a class="smooth"
                                    href=""
                                    title="">Comany Sun Marketing</a>
                            </h3>
                            <div class="description">Là đội ngủ đáng tin cậy tại Việt Nam về Solutions Marketing, SEO về Nail Salon tại USA. Với tin
                                thần GenZ các bạn làm việc hết mình hỗ trợ 24/24. Cảm ơn các bạn.
                            </div>
                        </div>
                        <a class="img"
                            href=""
                            title="">
                            <img class="lazy" data-src={{asset('./images/customer/sunmarketing.jpg')}} alt=""
                                title="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container load_more_post_talk_cnv">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <a href="blogs/bao-chi-noi-ve-cnv-loyalty.html"> → Xem thêm các bài viết tương tự </a>
                </div>
            </div>
        </div>

    </section>
    <section class="technology_solutions">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Giải pháp công nghệ toàn diện</h2>
            </div>
            <div class="row row_group">
                <div class="case_study col-lg-12">

                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/cover-16-9-wind-app-design.jpg" alt="Thiết kế ứng dụng tại Wind Lập Trình" title="Thiết kế ứng dụng tại Wind Lập Trình">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Giải pháp công nghệ từ Wind Lập Trình</h2>
                            </div>
                            <div class="group_post_case text-center">
                                <h2 class="title">
                                    <a href="">
                                        Chuyển Đổi Số Thành Công Với Wind Lập Trình
                                    </a>
                                </h2>
                                <p class="description_case">
                                    Wind Lập Trình đã giúp một số doanh nghiệp tạo ứng dụng thông minh, tích hợp website và Mini App, nâng cao trải nghiệm khách hàng vượt bậc.
                                </p>
                                <a href="" class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/cover-16-9-brand-tech-wind.jpg" alt="Giải pháp BrandTech từ Wind Lập Trình" title="Giải pháp BrandTech từ Wind Lập Trình">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Tích hợp BrandTech cho thương hiệu của bạn</h2>
                            </div>
                            <div class="group_post_case text-center">
                                <h2 class="title">
                                    <a href="">
                                        Giải Pháp BrandTech Hiệu Quả Từ Wind Lập Trình
                                    </a>
                                </h2>
                                <p class="description_case">
                                    Nâng tầm thương hiệu với công nghệ BrandTech độc đáo, kết hợp Mini App, Website và hệ thống quản lý thông minh để tối ưu kinh doanh.
                                </p>
                                <a href="" class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/cover-16-9-thiet-ke-software-wind.jpg" alt="Thiết kế phần mềm tại Wind Lập Trình" title="Thiết kế phần mềm tại Wind Lập Trình">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Phần mềm tùy chỉnh theo yêu cầu</h2>
                            </div>
                            <div class="group_post_case text-center">
                                <h2 class="title">
                                    <a href="">
                                        Thiết Kế Phần Mềm Tùy Biến Tại Wind Lập Trình
                                    </a>
                                </h2>
                                <p class="description_case">
                                    Tối ưu quy trình doanh nghiệp với phần mềm tùy chỉnh từ Wind Lập Trình, đảm bảo hiệu suất cao và dễ dàng tích hợp với các nền tảng hiện có.
                                </p>
                                <a href="" class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/cover-16-9-ecommerce-wind.jpg" alt="Giải pháp Ecommerce từ Wind Lập Trình" title="Giải pháp Ecommerce từ Wind Lập Trình">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Ecommerce tích hợp toàn diện</h2>
                            </div>
                            <div class="group_post_case text-center">
                                <h2 class="title">
                                    <a href="/blogs/ecommerce/giai-phap-ecommerce-tai-wind-lap-trinh.html">
                                        Giải Pháp Ecommerce Tại Wind Lập Trình
                                    </a>
                                </h2>
                                <p class="description_case">
                                    Tạo sự khác biệt với nền tảng ecommerce mạnh mẽ, tích hợp thanh toán, quản lý đơn hàng và hệ thống CRM tiên tiến.
                                </p>
                                <a href="/blogs/ecommerce/giai-phap-ecommerce-tai-wind-lap-trinh.html" class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/cover-16-9-miniapp-wind.jpg" alt="Thiết kế Mini App tại Wind Lập Trình" title="Thiết kế Mini App tại Wind Lập Trình">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Thiết kế Mini App chuyên nghiệp</h2>
                            </div>
                            <div class="group_post_case text-center">
                                <h2 class="title">
                                    <a href="/blogs/miniapp/ket-hop-miniapp-voi-website-tai-wind-lap-trinh.html">
                                        Kết Hợp Mini App Với Website Tại Wind Lập Trình
                                    </a>
                                </h2>
                                <p class="description_case">
                                    Phát triển Mini App sáng tạo, kết nối trực tiếp với website và các hệ thống quản lý thông minh, tối ưu trải nghiệm người dùng.
                                </p>
                                <a href="/blogs/miniapp/ket-hop-miniapp-voi-website-tai-wind-lap-trinh.html" class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="items row">
                        <div class="col-md-5">
                            <div class="t-icon">
                                <img class="lazy" data-src="/storage/cover-16-9-quanly-thongminh-wind.jpg" alt="Quản lý thông minh tại Wind Lập Trình" title="Quản lý thông minh tại Wind Lập Trình">
                            </div>
                        </div>
                        <div class="col-md-7 group_content_case_study">
                            <div class="headbox headbox_case">
                                <h2 class="title">Giải pháp quản lý thông minh</h2>
                            </div>
                            <div class="group_post_case text-center">
                                <h2 class="title">
                                    <a href="/blogs/quanlythongminh/giai-phap-quan-ly-thong-minh-tai-wind-lap-trinh.html">
                                        Giải Pháp Quản Lý Thông Minh Tại Wind Lập Trình
                                    </a>
                                </h2>
                                <p class="description_case">
                                    Wind Lập Trình mang đến giải pháp quản lý thông minh, giúp tối ưu vận hành và nâng cao hiệu quả doanh nghiệp.
                                </p>
                                <a href="/blogs/quanlythongminh/giai-phap-quan-ly-thong-minh-tai-wind-lap-trinh.html" class="load_more">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="group_news h-posts">
        <div class="container">
            <div class="headbox">
                <h2 class="title">Khám Phá Kiến Thức & Tài Nguyên Từ Wind Lập Trình</h2>
            </div>
            <ul class="nav">
                <li><a class="smooth active show" data-toggle="tab" href="#articles" title="">Bài Viết</a></li>
                <li><a class="smooth" data-toggle="tab" href="#resources" title="">Tài Nguyên</a></li>
            </ul>
            <div class="tab-content tab-content-news">
                <!-- Tab: Articles -->
                <div id="articles" class="tab-pane fade in active show">
                    <div class="row row-ibl">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" href="blogs/tin-tuc/hieu-suat-ung-dung-web.html" target="_blank">
                                    <img class="news-blog fade show lazy" data-src="/storage/article-1.png" alt="Tối ưu hiệu suất ứng dụng web">
                                </a>
                                <div class="title">
                                    <a href="blogs/tin-tuc/hieu-suat-ung-dung-web.html" class="article-title">Tối Ưu Hiệu Suất Ứng Dụng Web</a>
                                </div>
                                <div class="description">
                                    Cách cải thiện hiệu suất ứng dụng web, giảm thời gian tải trang và nâng cao trải nghiệm người dùng.
                                </div>
                                <div class="continue">
                                    <a href="blogs/tin-tuc/hieu-suat-ung-dung-web.html" class="article-title" target="_blank">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" href="blogs/tin-tuc/react-hooks-nang-cao.html" target="_blank">
                                    <img class="news-blog fade show lazy" data-src="/storage/article-2.png" alt="React Hooks nâng cao">
                                </a>
                                <div class="title">
                                    <a href="blogs/tin-tuc/react-hooks-nang-cao.html" class="article-title">React Hooks Nâng Cao</a>
                                </div>
                                <div class="description">
                                    Tìm hiểu các React Hooks nâng cao và cách áp dụng để quản lý trạng thái hiệu quả hơn.
                                </div>
                                <div class="continue">
                                    <a href="blogs/tin-tuc/react-hooks-nang-cao.html" class="article-title" target="_blank">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" aria-label="text"
                                    href="blogs/tin-tuc/huong-dan-toi-uu-mini-app-cho-nguoi-moi-bat-dau.html"
                                    target="_blank">
                                    <img class="news-blog fade show lazy"
                                        data-src="/storage/mini-app-optimization-guide.png" 
                                        alt="Hướng dẫn tối ưu Mini App cho người mới bắt đầu"
                                        title="Hướng dẫn tối ưu Mini App cho người mới bắt đầu">
                                </a>
                                <div class="title">
                                    <a href="blogs/tin-tuc/huong-dan-toi-uu-mini-app-cho-nguoi-moi-bat-dau.html"
                                        class="article-title">Hướng dẫn tối ưu Mini App cho người mới bắt đầu</a>
                                </div>
                                <div class="description">
                                    Bạn muốn xây dựng Mini App nhưng chưa biết bắt đầu từ đâu? Hãy cùng khám phá các mẹo và chiến lược 
                                    giúp bạn tối ưu hiệu quả Mini App ngay từ bước đầu tiên.
                                </div>
                                <div class="continue">
                                    <a href="blogs/tin-tuc/huong-dan-toi-uu-mini-app-cho-nguoi-moi-bat-dau.html"
                                        class="article-title" target="_blank" title="">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-12 col-12 text-center load_more_new">
                        <a href="blogs/tin-tuc.html">→ Xem tất cả bài viết</a>
                    </div>
                </div>
                <!-- Tab: Resources -->
                <div id="resources" class="tab-pane fade">
                    <div class="row row-ibl">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" href="ebooks/thu-vien-ebook/huong-dan-laravel.html" target="_blank">
                                    <img class="news-blog fade show lazy" data-src="/storage/ebook-1.jpg" alt="Ebook Laravel">
                                </a>
                                <div class="title">
                                    <a href="ebooks/thu-vien-ebook/huong-dan-laravel.html" class="article-title">Ebook: Hướng Dẫn Laravel Từ Cơ Bản Đến Nâng Cao</a>
                                </div>
                                <div class="description">
                                    Cuốn ebook chi tiết giúp bạn làm chủ Laravel framework với các ví dụ thực tế.
                                </div>
                                <div class="continue">
                                    <a href="ebooks/thu-vien-ebook/huong-dan-laravel.html" class="article-title" target="_blank">Tải ngay →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" href="ebooks/thu-vien-ebook/thiet-ke-api.html" target="_blank">
                                    <img class="news-blog fade show lazy" data-src="/storage/ebook-2.jpg" alt="Ebook Thiết Kế API">
                                </a>
                                <div class="title">
                                    <a href="ebooks/thu-vien-ebook/thiet-ke-api.html" class="article-title">Ebook: Thiết Kế API Hiệu Quả</a>
                                </div>
                                <div class="description">
                                    Hướng dẫn xây dựng API RESTful chuyên nghiệp và bảo mật.
                                </div>
                                <div class="continue">
                                    <a href="ebooks/thu-vien-ebook/thiet-ke-api.html" class="article-title" target="_blank">Tải ngay →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 item">
                            <div class="news-item">
                                <a class="cnv-img-4x3" aria-label="text"
                                    href="ebooks/thu-vien-ebook/ebook-ky-thuat-phat-trien-mini-app.html"
                                    target="_blank">
                                    <img class="news-blog fade show lazy"
                                        data-src="/storage/ebook-mini-app-development.png"
                                        alt="Ebook: Kỹ thuật phát triển Mini App chuyên sâu"
                                        title="Ebook: Kỹ thuật phát triển Mini App chuyên sâu">
                                </a>
                                <div class="title">
                                    <a href="ebooks/thu-vien-ebook/ebook-ky-thuat-phat-trien-mini-app.html"
                                        class="article-title">Ebook: Kỹ thuật phát triển Mini App chuyên sâu</a>
                                </div>
                                <div class="description">
                                    Khám phá những kỹ thuật tiên tiến nhất để xây dựng Mini App hiện đại, tối ưu hóa hiệu suất và tăng
                                    trải nghiệm người dùng.
                                </div>
                                <div class="continue">
                                    <a href="ebooks/thu-vien-ebook/ebook-ky-thuat-phat-trien-mini-app.html"
                                        class="article-title" target="_blank" title="">Đọc tiếp →</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-12 col-12 text-center load_more_new">
                        <a href="ebooks/thu-vien-ebook.html">→ Xem tất cả tài nguyên</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
