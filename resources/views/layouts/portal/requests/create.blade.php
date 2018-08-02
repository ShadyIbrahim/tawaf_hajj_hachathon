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
                 طلب جديد 
                </div>
              <p class="mb-20 text-center" style="text-align: center!important;margin: 0 auto">
               هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
               </p>
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
            <h4>طلب جديد </h4>
         </div>


            <!-- table  -->
            <div class="gallery ohidden no-padding col-12">
                <div class="col-md-12  status mb-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                              <form method="post" action="{{ url('portal/requests/create') }}">
                                    <div class="form-group row">
                                        <div class="col-2" style="padding-top: 2%;">
                                        <label for="example-number-input" class="col-form-label">عدد الطائفين</label>
                                       </div>
                                       <div class="col-10">
                                            <input class="form-control" type="number" name="expectedNumber" value="32" id="example-number-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2" style="padding-top: 2%;">
                                        <label for="example-text-input" class="col-form-label">إسم المشرف</label>
                                        </div>
                                        <div class="col-10">
                                            <select class="form-control" name="start_location" id="example-text-input" style="height: auto;">
                                              <option value="محمدن حسن علي">محمدن حسن علي</option>
                                              <option value="محمود السيد بن علي">محمود السيد بن علي</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2" style="padding-top: 2%;">
                                          <label for="example-text-input">الإنطلاق</label>
                                        </div>
                                        <div class="col-10">
                                            <select class="form-control" name="start_location" id="example-text-input" style="height: auto;">
                                              <option value="فندق أجياد">فندق أجياد</option>
                                              <option value="فندق أجياد">فندق الصفوة</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                          <div class="col-2" style="padding-top: 2%;">
                                          <label for="example-text-input">الوصول</label>
                                          </div>
                                          <div class="col-10">
                                              <select class="form-control" name="destination" id="example-text-input" style="height: auto;">
                                                <option value="الحرم المكي">الحرم المكي</option>
                                              </select>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2" style="padding-top: 2%;">
                                        <label for="example-date-input" class="col-form-label">التاريخ</label>
                                        </div>
                                        <div class="col-10">
                                            <input class="form-control" name="plannedStartDate" type="date" value="2018-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2" style="padding-top: 2%;">
                                        <label for="example-time-input" class="col-form-label">التوقيت</label>
                                        </div>
                                        <div class="col-10">
                                            <input class="form-control" name="plannedStartTime" type="time" value="13:45:00" id="example-time-input">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <div class="col-2" style="padding-top: 2%;">
                                        <label for="example-time-input" class="col-form-label">الوقت المتوقع للإنتهاء</label>
                                        </div>
                                        <div class="col-10">
                                            <input class="form-control" name="expectedEndDate" type="datetime-local" id="example-time-input">
                                        </div>
                                    </div> -->
                                    <button type="submit" class="btn m-btn btn-primary m-loader--light m-loader--left">
                                        إرسال الطلب
                                    </button>
                                    <!-- <div class="form-group row">
                                        
                                        <div class="col-10">
                                            <submit class="btn"></submit>
                                        </div>
                                    </div> -->
                                </form>
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