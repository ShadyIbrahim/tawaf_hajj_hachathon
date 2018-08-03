@extends('layouts.app')

@section('content')
  
<!-- portfolio
================================================== -->
<section class="bg-color portfolio section-padding">
    <div class="container px-0 my-4"> 
        <!-- First Row -->
        <div class="row d-flex justify-content-center flex-nowrap my-1 text-center">
            <div class="white mx-1 my-1 shadow  col-lg-4">
                <!-- <h6 class="my-2 font-weight-normal">طلب جديد </h6> -->
                @if($totalNow < 25)
                <table class="my-3 table table-sucess table-hover table-font">
                    <thead class="table-header-sucess">
                        <tr>
                            <th scope="col">السعة الاستيعابية</th>
                            <th scope="col" class="font-weight-bold">250K</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">الحالة</th>
                            <td>يسمح بالدخول</td>
                        </tr>
                        <tr>
                            <td class="py-4 last"rowspan="3">المتواجدين حالياً</td>
                            <td class="py-4 last"rowspan="3">+{{ $totalNow }}0K</td>
                        </tr>
                    </tbody>
                </table>
                @else
                <table class="my-3 table table-danger table-hover table-font">
                    <thead class="table-header-danger">
                        <tr>
                            <th scope="col">السعة الاستيعابية</th>
                            <th scope="col" class="font-weight-bold">250K</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">الحالة</th>
                            <td>لا يسمح بالدخول</td>
                        </tr>
                        <tr>
                            <td class="py-4 last"rowspan="3">المتواجدين حالياً</td>
                            <td class="py-4 last"rowspan="3">{{ $totalNow }}0K</td>
                        </tr>
                    </tbody>
                </table>
                @endif
            </div>
            <div class="white mx-1 my-1 shadow  col-lg-4">
                <!-- <h6 class="my-2 font-weight-normal">طلب جديد </h6> -->
                <table class="my-3 table table-striped table-striped table-hover table-font">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">الجنس</th>
                            <th scope="col">المتواجدون</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">ذكر</th>
                            <td class="font-weight-bold" >{{ count($gender['m']) }}0K</td>
                        </tr>
                        <tr>
                            <th scope="row">أنثى</th>
                            <td class="font-weight-bold" > {{ count($gender['f']) }}0K</td>
                        </tr>
                        <!-- <tr>
                            <th scope="row">صغار</th>
                            <td class="font-weight-bold" > 100,000</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="white mx-1 my-1 shadow  col-lg-4">
                <!-- <h6 class="my-2 font-weight-normal">طلب جديد </h6> -->
                <table class="my-3 table table-striped table-hover table-font">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">الفئات العمرية</th>
                            <th scope="col">المتواجدون</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">20 - 40</th>
                            <td class="font-weight-bold" > {{ count($age[20]) }}0K</td>
                            </tr>
                        <tr>
                            <th scope="row">41 - 50</th>
                            <td class="font-weight-bold" > {{ count($age[40]) }}0K</td>
                        </tr>
                        <tr>
                            <th scope="row">50 وأكثر</th>
                            <td class="font-weight-bold" >{{ count($age[50]) }}0K</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End First Row -->
        <!-- Second Row -->
        <div class="row d-flex justify-content-center flex-nowrap my-1 text-center">
            <div class="white mx-1 my-1 shadow  col-lg-6">
                <!-- <h6 class="my-2 font-weight-normal">طلب جديد </h6> -->
                <table class="my-3 table table-striped table-hover table-font">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">الدولة</th>
                            <th scope="col">المتواجدون حالياً</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">مصر</th>
                            <td class="font-weight-bold" >{{ count($country['مصر']) }}0K</td>
                        </tr>
                        <tr>
                            <th scope="row">الإمارات</th>
                            <td class="font-weight-bold" >{{ count($country['الإمارات']) }}0K</td>
                        </tr>
                        <tr>
                            <th scope="row">البحرين</th>
                            <td class="font-weight-bold" >{{ count($country['البحرين']) }}0K</td>
                        </tr>
                        <tr>
                            <th scope="row">الكويت</th>
                            <td class="font-weight-bold" >{{ count($country['الكويت']) }}0K</td>
                        </tr>
                        <tr>
                            <th scope="row">الهند</th>
                            <td class="font-weight-bold" >{{ count($country['الهند']) }}0K</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="white mx-1 my-1 shadow  col-lg-6">
                <!-- <h6 class="my-2 font-weight-normal">طلب جديد </h6> -->
                <table class="my-3 table table-striped table-hover table-font">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">الطريق</th>
                            <th scope="col">الباصات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">طريق إبراهيم الخليل</th>
                            <td class="font-weight-bold" > 60</td>
                        </tr>
                        <tr>
                            <th scope="row">طريق أم القرى </th>
                            <td class="font-weight-bold" > 40</td>
                        </tr>
                        <tr>
                            <th scope="row">طريق الحجون</th>
                            <td class="font-weight-bold" >20</td>
                        </tr>
                        <tr>
                            <th scope="row">طريق كدي</th>
                            <td class="font-weight-bold" >10</td>
                        </tr>
                        <tr>
                            <th scope="row">طريق العزيزية</th>
                            <td class="font-weight-bold" >54</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Second Row -->
        <!-- Third Row -->
        <div class="row d-flex justify-content-center flex-nowrap my-1 text-center">
            <div class="white mx-1 my-1 shadow  col-lg-12">
                <!-- <h6 class="my-2 font-weight-normal">طلب جديد </h6> -->
                <table class="my-3 table table-striped table-hover table-font">
                    <thead class="table-header">
                        <tr>
                            <th scope="col">المؤسسة</th>
                            <th scope="col">المتواجدون حالياً</th>
                            <th scope="col">الطلبات القادمة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">مؤسسة الدول العربية</th>
                            <td class="font-weight-bold">200,000</td>
                            <td class="font-weight-bold">10,000</td>
                        </tr>
                        <tr>
                            <th scope="row">مؤسسة جنوب شرق اسيا </th>
                            <td class="font-weight-bold">200,000</td>
                            <td class="font-weight-bold">10,000</td>
                        </tr>
                        <tr>
                            <th scope="row">مؤسسة تركيا</th>
                            <td class="font-weight-bold">200,000</td>
                            <td class="font-weight-bold">10,000</td>
                        </tr>
                        <tr>
                            <th scope="row" >مؤسسة أفريقيا وأوروبا</th>
                            <td class="font-weight-bold">200,000</td>
                            <td class="font-weight-bold">10,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Second Row -->
    </div>  
    <!-- End Second Contanier -->  
</section>
 


@endsection