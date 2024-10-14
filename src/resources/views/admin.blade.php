@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
</div>


        <div class="confirm__content">
        <div class="confirm__heading">
            <h2>Admin</h2>
        </div>


        <form class="form">
            <nav class="pc-menu menu-left menu">
                <ul>
                    <div class="form__group-content">
                <div class="form__input--text">
                    <li><input type="text" name="text" placeholder="名前やメールアドレスを入力してください" /></li>
                    <li><input type="text" name="text" placeholder="性別" /></li>
                    <li><div class="form__select">
                            <select name="select">
                                <option name="select" value="選択してください">選択してください</option>
                                <option name="select" value="1. 商品のお届けについて">1. 商品のお届けについて</option>
                                <option name="select" value="2. 商品の交換について">2. 商品の交換について</option>
                                <option name="select" value="3. 商品トラブル">3. 商品トラブル</option>
                                <option name="select" value="4. ショップへのお問い合わせ">4. ショップへのお問い合わせ</option>
                                <option name="select" value="5. その他">5. その他</option>
                            </select>
                        </div></li>
                    <li><input type="text" name="text" placeholder="年/月/日" /></li>
                    <li><button class="form__button-submit" type="submit">
                        検索
                    </button></li>
                    <li><button class="form__button-submit" type="submit">
                        リセット
                    </button></li>


                </div>
                </ul>
                </nav>
        </form>




        </div>

@endsection
