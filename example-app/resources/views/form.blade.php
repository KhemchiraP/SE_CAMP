@extends('layouts.default')

@section('title', 'Formpage')

@section('content')
           <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form</h3>
            </div>
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputFirstName">ชื่อ</label>
                  <input type="firtname" class="form-control" id="inputFirstName" >
                </div>
                <div class="form-group">
                  <label for="inputLastName">นามสกุล</label>
                  <input type="lastname" class="form-control" id="inputLastName">
                </div>
                <div class="form-group">
                    <label for="inputAge">อายุ</label>
                    <input type="age" class="form-control" id="inputAge">
                  </div>
                <div class="form-group">
                    <label  for="inputSex">เพศ</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">ชาย</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio2">
                          <label class="form-check-label">หญิง</label>
                        </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>ที่อยู่</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>สีที่ชอบ</label>
                    <select class="form-control">
                      <option>สีดำ</option>
                      <option>สีขาว</option>
                      <option>สีแดง</option>
                      <option>สีน้ำเงิน</option>
                      <option>สีเหลือง</option>
                      <option>สีเขียว</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label  for="inputSex">แนวเพลงที่ชอบ</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1">
                        <label class="form-check-label">เพื่อชีวิต</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio2">
                        <label class="form-check-label">ลูกทุ่ง</label></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio3">
                        <label class="form-check-label">อื่นๆ</label></label>
                    </div>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                </div>
              </div>



              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection
