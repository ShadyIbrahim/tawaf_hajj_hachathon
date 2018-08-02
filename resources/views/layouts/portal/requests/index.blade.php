@extends('layouts.app')

@section('content')
<main class="main-content ">
        <!-- Header
        ================================================== -->
        <header class="page-header">
          <div class="bg-back cover-bg">
            <div class="transparent section-pading">
              <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="part-content text-center">
                    <div class="page-title text-center mb-10" title="هاكثون الحج ">
                      هاكثون الحج
                      </div>
                    <p class="mb-20 text-center" style="text-align: center!important;margin: 0 auto">
                    هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                    </p>
                    <a href="{{ url('portal/requests/create') }}" class="btn"><span>إنشاء طلب جديد</span></a>
                  </div>
                </div>
              </div>
            </div>
              </div>
          </div>
        </header>
        <!-- End Header
        ================================================== -->

        <!-- portfolio
        ================================================== -->
        <section class="portfolio work section-padding" data-scroll-index='4'>
          <div class="container">
            <div class="row">
              <div class="section-title">
                <h4>      الرحلات وتفاصيلها  </h4>
              </div>


              <div class="filtering text-center mb-50">
                <button type="button" data-filter='.status' class="active">
                    <i class="fa fa-bolt"></i>
                    الحالة</button>
                <button type="button" data-filter='.m3lk'>
                    <i class="fa fa-ellipsis-h"></i>
                    المعلقة </button>
                <button type="button" data-filter='.prev'>
                    <i class="fa fa-clock"></i>
                    السابقة  </button>
                <button type="button" data-filter='.arch'>
                    <i class="fa fa-trash"></i>
                    المؤرشفة  </button>
              </div>

              <!-- table  -->
              <div class="gallery ohidden no-padding col-12">

                <div class="col-md-12  status mb-30">
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12 mx-auto">
                        <table   class="table table-bordered table-hover dt-responsive">

                          <thead>
                            <tr>
                              <th>موعد الرحلة</th>
                              <th>عددالطائفين</th>
                              <th>مكان الأنطلاق</th>
                              <th>المرشد </th>
                              <th>  المطوف</th>
                              <th>الاجراء</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($requests as $request)
                              <tr>
                              <td>{{ $request->plannedStartDate . ' / '. $request->plannedStartTime }} </td>
                                <td><span class="taaf">{{ $request->expectedNumber }}</span></td>
                                <td><span class="taaf">{{ $request->start_location }}</span></td>
                                <td class="icon-tr">
                                    <ul>
                                    <li>
                                    <div class="img-tr">
                                    <img src="{{ asset('frontendAsset//img/csteam.png') }}">
                                    </div>
                                    </li>
                                    <li> <span> عبدالله على </span></li>
                                    </ul>
                                    </td>
                                <td class="icon-tr">
                                    <ul>
                                    <li>
                                    <div class="img-tr">
                                    <img src="{{ asset('frontendAsset//img/csteam.png') }}">
                                    </div>
                                    </li>
                                    <li> <span> محمد حسن علي </span></li>
                                    </ul>
                                    </td>
                              <td><a href="#" class="btn"><span>التفاصيل</span></a></td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                              <td>12-3-2018 / 9 مساءا</td>
                                <td><span class="taaf">120</span></td>
                                <td class="icon-tr">
                                    <ul>
                                    <li>
                                    <div class="img-tr">
                                    <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                    </div>
                                    </li>
                                    <li> <span> عبدالله على </span></li>
                                    </ul>
                                    </td>
                                <td class="icon-tr">
                                    <ul>
                                    <li>
                                    <div class="img-tr">
                                    <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                    </div>
                                    </li>
                                    <li> <span> عبدالله على </span></li>
                                    </ul>
                                    </td>
                              <td><a href="#" class="btn"><span>التفاصيل</span></a></td>
                            </tr> -->

                          </tbody>

                        </table>

                        </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-12  m3lk mb-30">
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12 mx-auto">
                        <table   class="table table-bordered table-hover dt-responsive">

                          <thead>
                            <tr>
                              <th>موعد الرحلة</th>
                              <th>عددالطائفين</th>
                              <th>المرشد </th>
                              <th>  المطوف</th>
                              <th>الاجراء</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                              <td>12-3-2018 / 9 مساءا</td>
                                <td><span class="taaf">120</span></td>
                                <td class="icon-tr">
                                    <ul>
                                    <li>
                                    <div class="img-tr">
                                    <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                    </div>
                                    </li>
                                    <li> <span> عبدالله على </span></li>
                                    </ul>
                                    </td>
                                <td class="icon-tr">
                                    <ul>
                                    <li>
                                    <div class="img-tr">
                                    <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                    </div>
                                    </li>
                                    <li> <span> عبدالله على </span></li>
                                    </ul>
                                    </td>
                              <td><a href="#" class="btn"><span>التفاصيل</span></a></td>
                            </tr>
                            <tr>
                              <td>12-3-2018 / 9 مساءا</td>
                                <td><span class="taaf">120</span></td>
                                <td class="icon-tr">
                                    <ul>
                                    <li>
                                    <div class="img-tr">
                                    <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                    </div>
                                    </li>
                                    <li> <span> عبدالله على </span></li>
                                    </ul>
                                    </td>
                                <td class="icon-tr">
                                    <ul>
                                    <li>
                                    <div class="img-tr">
                                    <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                    </div>
                                    </li>
                                    <li> <span> عبدالله على </span></li>
                                    </ul>
                                    </td>
                              <td><a href="#" class="btn"><span>التفاصيل</span></a></td>
                            </tr>

                          </tbody>

                        </table>

                        </div>
                    </div>
                  </div>

                </div>
                <div class="col-md-12  prev mb-30">
                  <div class="container">
                  <div class="row">
                    <div class="col-xs-12 mx-auto">
                      <table   class="table table-bordered table-hover dt-responsive">

                        <thead>
                          <tr>
                            <th>موعد الرحلة</th>
                            <th>عددالطائفين</th>
                            <th>المرشد </th>
                            <th>  المطوف</th>
                            <th>الاجراء</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>12-3-2018 / 9 مساءا</td>
                              <td><span class="taaf">120</span></td>
                              <td class="icon-tr">
                                  <ul>
                                  <li>
                                  <div class="img-tr">
                                  <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                  </div>
                                  </li>
                                  <li> <span> عبدالله على </span></li>
                                  </ul>
                                  </td>
                              <td class="icon-tr">
                                  <ul>
                                  <li>
                                  <div class="img-tr">
                                  <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                  </div>
                                  </li>
                                  <li> <span> عبدالله على </span></li>
                                  </ul>
                                  </td>
                            <td><a href="#" class="btn"><span>التفاصيل</span></a></td>
                          </tr>
                          <tr>
                            <td>12-3-2018 / 9 مساءا</td>
                              <td><span class="taaf">120</span></td>
                              <td class="icon-tr">
                                  <ul>
                                  <li>
                                  <div class="img-tr">
                                  <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                  </div>
                                  </li>
                                  <li> <span> عبدالله على </span></li>
                                  </ul>
                                  </td>
                              <td class="icon-tr">
                                  <ul>
                                  <li>
                                  <div class="img-tr">
                                  <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                  </div>
                                  </li>
                                  <li> <span> عبدالله على </span></li>
                                  </ul>
                                  </td>
                            <td><a href="#" class="btn"><span>التفاصيل</span></a></td>
                          </tr>

                        </tbody>

                      </table>

                      </div>
                  </div>
                </div>

                </div>

              <div class="col-md-12  arch mb-30">
                  <div class="container">
                <div class="row">
                  <div class="col-xs-12 mx-auto">
                    <table   class="table table-bordered table-hover dt-responsive">

                      <thead>
                        <tr>
                          <th>موعد الرحلة</th>
                          <th>عددالطائفين</th>
                          <th>المرشد </th>
                          <th>  المطوف</th>
                          <th>الاجراء</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                          <td>12-3-2018 / 9 مساءا</td>
                            <td><span class="taaf">120</span></td>
                            <td class="icon-tr">
                                <ul>
                                <li>
                                <div class="img-tr">
                                <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                </div>
                                </li>
                                <li> <span> عبدالله على </span></li>
                                </ul>
                                </td>
                            <td class="icon-tr">
                                <ul>
                                <li>
                                <div class="img-tr">
                                <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                </div>
                                </li>
                                <li> <span> عبدالله على </span></li>
                                </ul>
                                </td>
                          <td><a href="#" class="btn"><span>التفاصيل</span></a></td>
                        </tr>
                        <tr>
                          <td>12-3-2018 / 9 مساءا</td>
                            <td><span class="taaf">120</span></td>
                            <td class="icon-tr">
                                <ul>
                                <li>
                                <div class="img-tr">
                                <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                </div>
                                </li>
                                <li> <span> عبدالله على </span></li>
                                </ul>
                                </td>
                            <td class="icon-tr">
                                <ul>
                                <li>
                                <div class="img-tr">
                                <img src="{{ asset('frontendAsset/img/csteam.png') }}">
                                </div>
                                </li>
                                <li> <span> عبدالله على </span></li>
                                </ul>
                                </td>
                          <td><a href="#" class="btn"><span>التفاصيل</span></a></td>
                        </tr>

                        <!-- details -->
                        <tr>
                            <td colspan="5">
                        <div class="moer-detail">
                            <div class="row">
                            <div class="col-sm-6">
                                <h5>الملاحظات</h5>
                                <p>هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة</p>
                            </div>
                              <div class="col-sm-6">
                                <h5>ملاحظات الطواف</h5>
                                <p>هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة</p>
                            </div>
                            </div >
                            <hr>
                            <div class="row">
                            <div class="col-sm-6">
                                <h5>الحالة</h5>
                                <p class="taaf">تم الموافقة عليها <i class="fa fa-check"></i></p>
                                <p><span>10-3-2018</span>
                                    <span>6:00 مساءا</span>
                                </p>
                            </div>
                              <div class="col-sm-6">
                                <h5>  وقت الطلب</h5>
                                <p><span>10-3-2018</span>
                                    <span>6:00 مساءا</span>
                                </p>
                            </div>
                            </div >
                              <div class="row">
                                    <div class="col-sm-12">
                                        <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237761.33646486697!2d39.857911771707066!3d21.389082402061163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c21b4ced818775%3A0x98ab2469cf70c9ce!2z2YXZg9ipINin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1533145018270" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                </div>


                            </td>
                        </tr>

                      </tbody>

                    </table>

                    </div>
                </div>
              </div>

                </div>

                </div>

            </div>
          </div>
        </section>
        <!-- End portfolio
        ================================================== -->

      </main>
@endsection