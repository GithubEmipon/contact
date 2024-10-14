<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text&display=swap" rel="stylesheet">
    </head>

    <body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo">
            FashionablyLate
        </a>
        </div>
        <hr>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                            <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}"/>
                        </div>
                        <div class="form__error">
                            @error('first_name')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form__error">
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <input id="men" type="radio" name="gender" value="1" checked>
                            <label for="men" name="gender" value="男性" value="{{ old('gender') }}">男性</label>
                            <input id="women" type="radio" name="gender" value="2">
                            <label for="women" name="gender" value="女性" value="{{ old('gender') }}">女性</label>
                            <input id="gender" type="radio" name="gender" value="3">
                            <label for="gender" name="gender" value="その他" value="{{ old('gender') }}">その他</label>
                        </div>
                        <div class="form__error">
                            @error('gender')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder="090" pattern="[0-9]{3}" value="{{ old('tel') }}"/> - <input type="tel" name="tel" placeholder="1234" pattern="[0-9]{4}" value="{{ old('tel') }}" /> - <input type="tel" name="tel" placeholder="5678" pattern="[0-9]{4}" value="{{ old('tel') }}" />
                        </div>
                        <div class="form__error">
                            @error('tel')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="address" name="address1" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address1') }}" />
                        </div>
                        <div class="form__error">
                            @error('address1')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="address" name="address2" placeholder="例:千駄ヶ谷マンション101" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__select">
                            <select name="select">
                                <option name="select" value="選択してください">選択してください</option>
                                <option name="select" value="1. 商品のお届けについて">1. 商品のお届けについて</option>
                                <option name="select" value="2. 商品の交換について">2. 商品の交換について</option>
                                <option name="select" value="3. 商品トラブル">3. 商品トラブル</option>
                                <option name="select" value="4. ショップへのお問い合わせ">4. ショップへのお問い合わせ</option>
                                <option name="select" value="5. その他">5. その他</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{ old('content') }}"></textarea>
                        </div>
                        <div class="form__error">
                            @error('content')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">
                        確認画面
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
