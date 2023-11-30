@extends('navbar')
@section ('nav')

      <!--contact-form-section-->
      <section class="ttm-row contact-form-section clearfix">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="pt-50">
                                
                                  </div>
                              </div>
                          </div>
                          <table class="table">

        <thead class="table-success">
          <tr>
            <th class="table-success" scope="col">Jour</th>
            <th class="table-success" scope="col">Heure</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data6 as $element)
          <tr>
            <td>{{$element->jour}}</td>
            <td>{{$element->heure}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection