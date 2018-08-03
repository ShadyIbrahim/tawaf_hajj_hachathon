@extends('layouts.app')

@section('content')

        <header class="page-header">
        <div class="bg-back cover-bg">
           <div class="transparent section-pading">
             <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="part-content text-center">
                  <div class="page-title text-center mb-10" title="هاكثون الحج ">
                       تفاصيل الطلب
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
<section class="bg-color section-padding">
  <div class="container shadow my-4"> 
    <!-- First Row -->
    <div class="row justify-content-center">
        <div class="white text-center mx-1 col-lg-6 py-2 px-4">
            <h6 class="my-2 font-weight-normal">معلومات الطلب </h6>

            <div class="form-group row text-right">
                <div class="col-12">
                    <label for="example-number-input" class="col-form-label font-weight-bold">إسم المرشد:</label>
                    {{ $request->supervisorName }}
                </div>
            </div>
            <div class="form-group row text-right">
                <div class="col-6">
                    <label for="example-number-input" class="col-form-label font-weight-bold">عدد الطائفين المتوقع:</label>
                    {{ $request->expectedNumber }}
                </div>
                @if($request->actualNumber != null)
                <div class="col-6">
                    <label for="example-number-input" class="col-form-label font-weight-bold">عدد الطائفين الفعلي:</label>
                    {{ $request->actualNumber }}
                </div>
                @else
                <div class="col-6">
                  <label for="example-number-input" class="col-form-label font-weight-bold">الفعلي:</label>
                    لم يتم إضافة حجاج بعد
                </div>
                
                @endif
            </div>
            <div class="form-group row text-right">
                <div class="col-6">
                    <label for="example-number-input" class="col-form-label font-weight-bold">نقطة الإنطلاق:</label>
                    {{ $request->start_location }}
                </div>
                <div class="col-6">
                    <label for="example-text-input" class="col-form-label font-weight-bold">نقطة الوصول:</label>
                    {{ $request->destination }}
                </div>
            </div>
            <div class="form-group row text-right">
                <div class="col-6">
                    <label for="example-number-input" class="col-form-label font-weight-bold">التاريخ :</label>
                     {{ $request->plannedStartDate }}
                </div>
                <div class="col-6">
                    <label for="example-text-input" class="col-form-label font-weight-bold"> التوقيت:</label>
                     {{ $request->plannedStartTime }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="white text-center mx-1 col-lg-6 px-4">
            <h6 class="my-2 font-weight-normal"> معلومات الحجاج </h6>
            <table class="my-3 table table-striped table-striped table-hover request-info-font">
                <thead class="table-header">
                    <tr>
                        <th scope="col">اسم</th>
                        <th scope="col">الجنسية</th>
                        <th scope="col">العمر</th>
                        <th scope="col">النوع</th>
                    </tr>
                </thead>
                <tbody>
                  @forelse($batchData as $hajj)
                    <tr>
                        <th scope="row">{{ $hajj->FIRSTNAME }}</th>
                        <td>{{ $hajj->PASSPORT_ISSUE_PLA }}</td>
                        <td> {{ $hajj->AGE }}</td>
                        <td> {{ $hajj->GENDER }}</td>
                    </tr>
                    @empty
                      <tr>
                          <th scope="row" colspan="4">لم يتم إضافة حجاج للرحلة</th>
                      </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="white text-center mx-1 col-lg-6 pb-2 px-4">
            <h6 class="my-2 font-weight-normal"> الحالة  </h6>
            <table class="my-3 table table-striped table-striped table-hover request-info-font">
                <thead class="table-header">
                    <tr>
                        <th scope="col">الحالة</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                      @if(count($batchData) > 0)
                        <th scope="row"> في الطريق</th>
                        @else
                        <th scope="row"> مرتقبة</th>
                        @endif
                    </tr>
                </tbody>
            </table>
            <iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237761.33646486697!2d39.857911771707066!3d21.389082402061163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c21b4ced818775%3A0x98ab2469cf70c9ce!2z2YXZg9ipINin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1533145018270" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    
@if(count($batchData) > 0)
    @if(Auth::user()->id == 2)
    <div class="row justify-content-center">
        <div class="white text-center mx-1 col-lg-6 pb-2 px-4">
            <a href="{{ url('portal/addcordinator/'. $request->id) }}" type="button" class="btn btn-info mx-4"> قبول</a>
            <button type="button" class="btn btn-info mx-4"> اتصال</button>
        </div>
    </div>
    @endif
@else

@endif
      <!-- END col 6 -->
    </div>
    <!-- END Row -->
  </div>
</section>

@endsection