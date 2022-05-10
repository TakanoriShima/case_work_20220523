@extends('layouts.app')
@section('title', '新規利用者登録')
@section('content')         
    <div class="row mt-3">
        <h1 class="col-sm-12 text-center text-success pb-1 mt-5">新規利用者登録</h1>
    </div>
    <div class="col-sm-6 offset-sm-3">
        {!! Form::open(['route' => ['patients.store'], 'files' => true]) !!}
            <!-- 1行 -->
            <div class="form-group">
                {!! Form::label('name', '名前 :') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('birthday', '生年月日 : ') !!}
                {{ Form::date('birthday', null, ['class' => 'form-control']) }}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('gender', '性別 :') !!}
                <div class="form-check form-check-inline offset-2">
                    {{ Form::radio('gender', 'male', true, ['class'=>'form-check-input', 'for' => 'inlineCheckbox1']) }}
                    {!! Form::label('gender', '男性' , ['class' => 'form-check-label']) !!}
                </div>
                <div class="form-check form-check-inline offset-2">
                    {{ Form::radio('gender', 'female', false, ['class'=>'form-check-input', 'for' => 'inlineCheckbox2']) }}
                    {!! Form::label('gender', '女性', ['class' => 'form-check-label']) !!}
                </div>
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('postal_code', '郵便番号 : ') !!}
                {!! Form::text('postal_code', old('postal_code'), ['class' => 'form-control', 'placeholder' => '123-4567']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('address', '住所 : ') !!}
                {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('phone_number', '電話番号 : ') !!}
                {!! Form::text('phone_number', old('phone_number'), ['class' => 'form-control', 'placeholder' => '090-xxx-xxxx(携帯) / 092-xxx-xxxx(自宅)']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('email', 'メールアドレス : ') !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'sample@gmail.com']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('emergency_contact', '緊急連絡先 : ') !!}
                {!! Form::text('emergency_contact', old('emergency_contact'), ['class' => 'form-control', 'placeholder' => '090-xxx-xxxx / 092-xxx-xxxx(両親、配偶者など)']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('family_hospital', '医療機関 :') !!}
                {!! Form::textarea('family_hospital', old('family_hospital'), ['class' => 'form-control', 'placeholder' => '医療機関名、主治医、通院頻度、連絡先などを記入(過去の医療機関や入院歴も分かれば記入)。', 'rows' => '4']) !!}
            </div>
            
             <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('disease_name', '病名 : ') !!}
                {!! Form::text('disease_name', old('disease_name'), ['class' => 'form-control']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('clinical_history', '病歴 :') !!}
                {!! Form::textarea('clinical_history', old('clinical_history'), ['class' => 'form-control', 'placeholder' => 'どのようなことが原因で、いつ医療機関を受診し、どのような治療を受けたのかなどをできる限り記入。']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('medical_history', '既往歴 :') !!}
                {!! Form::textarea('medical_history', old('medical_history'), ['class' => 'form-control', 'placeholder' => '精神疾患以外の病気や、かかりつけ医療機関があれば記入。', 'rows' => '3']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('life_history', '生活歴 :') !!}
                {!! Form::textarea('life_history', old('life_history'), ['class' => 'form-control', 'placeholder' => '利用者の性格や育った家庭環境などをできる限り記入。']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('family_structure', '家族構成 :') !!}
                {!! Form::textarea('family_structure', old('family_structure'), ['class' => 'form-control', 'placeholder' => '家族状況と、利用者を支援する中でキーパーソンとなる家族をできる限り記入。', 'rows' => '3']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('academic_background', '学歴 :') !!}
                {!! Form::textarea('academic_background', old('academic_background'), ['class' => 'form-control', 'placeholder' => '例: 平成XX年X月 YY大学卒業', 'rows' => '2']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('work_experience', '職歴 :') !!}
                {!! Form::textarea('work_experience', old('work_experience'), ['class' => 'form-control', 'placeholder' => '例: 平成XX年X月～令和YY年Y月  Z会社の事務職として10年勤務', 'rows' => '2']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('economic_condition', '経済状況 :') !!}
                {!! Form::textarea('economic_condition', old('economic_condition'), ['class' => 'form-control', 'placeholder' => '例: 就労継続支援A型事業所の収入 10万/月、両親の仕送り 3万/月', 'rows' => '2']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('related_organization', '関係機関 :') !!}
                {!! Form::textarea('related_organization', old('related_organization'), ['class' => 'form-control', 'placeholder' => '担当者、連絡先も記入。', 'rows' => '4']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('welfare_service', '福祉サービス等 :') !!}
                {!! Form::textarea('welfare_service', old('welfare_service'), ['class' => 'form-control', 'placeholder' => '障害年金、障害者手帳など', 'rows' => '3']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('image', '画像資料 :') !!}
                {!! Form::file('image', ['class' => 'form-control', 'multiple' => 'multiple']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('consideration', '支援にあたり配慮すべきこと :') !!}
                {!! Form::textarea('consideration', old('consideration'), ['class' => 'form-control', 'placeholder' => '障害特性に関わる具体的な内容をできる限り記入', 'rows' => '5']) !!}
            </div>
            
            <!-- 1行 -->
            <div class="form-group mt-4">
                {!! Form::label('other', 'その他 :') !!}
                {!! Form::textarea('other', old('other'), ['class' => 'form-control', 'rows' => '3']) !!}
            </div>
            
    </div>
            {!! Form::submit('登録', ['class' => 'offset-sm-4 col-sm-4 mt-5 mb-5 btn btn-primary']) !!}
        {!! Form::close() !!}
@endsection
            