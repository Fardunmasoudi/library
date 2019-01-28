@extends('layouts.master')

@section('Content')
    <form action="{{ route('Users.Store') }}" method="POST" role="form">
        {{@csrf_field()}}
        <div class="form_row">
            <label class="field_name align_left" for="name">نام</label>
            <div class="field">
                <input name="name" class="span3" maxlength="12" id="name" required>
            </div>
        </div>
        <div class="form_row">
            <label class="field_name align_left" for="uname">نام خانوادگی</label>
            <div class="field">
                <input name="lastname" class="span4" maxlength="12" id="uname" required>
            </div>
        </div>
        <div class="form_row">
            <label class="field_name align_left" for="ucode">کدملی</label>
            <div class="field">
                <input name="nationalcode" class="span5" maxlength="12" id="ucode" required>
            </div>
        </div>
        <div class="form_row">
            <label class="field_name align_left" for="utell">شماره تلفن</label>
            <div class="field">
                <input name="mobile" class="span6" maxlength="12" id="utell" required>
            </div>
        </div>
        <div class="form_row">
            <label class="field_name align_left" for="uname">نام کاربری</label>
            <div class="field">
                <input name="username" class="span7" maxlength="12" id="uname" required>
            </div>
        </div>
        <div class="form_row">
            <label class="field_name align_left" for="upass">رمز عبور</label>
            <div class="field">
                <input name="password" class="span8" maxlength="12" id="upass" required>
            </div>
        </div>
        <div class="form_row">
            <label class="field_name align_left" for="uadd">آدرس</label>
            <div class="field">
                                    <textarea name="addres" rows="5" class="span9" maxlength="12" id="uadd"
                                              required></textarea>
            </div>
        </div>
        <div class="form_row">
            <div class="field">
                <input type="submit" name="btnregister" class="btn btn-success" value="ثبت کردن">
            </div>
        </div>
    </form>
@endsection