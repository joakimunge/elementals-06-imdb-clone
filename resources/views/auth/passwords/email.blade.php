@extends('layouts.app')

@section('content')

    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Reset Password</p>
                </header>

                <div class="card-content">
                    @if (session('status'))
                        <div class="notification">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">

                        {{ csrf_field() }}

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label label-email">E-Mail Address</label>
                            </div>

                            <div class="field-body">
                                <div class="field">
                                    <p class="control has-icons-left has-icons-right">
                                        <input class="input" id="email" type="email" name="email" placeholder="Email"
                                               value="{{ old('email') }}" required autofocus>
                                               <span class="icon is-small is-left">
                                                 <i class="fa fa-envelope"></i>
                                                </span>
                                                <span class="icon is-small is-right">
                                                 <i class="fa fa-check"></i>
                                                 </span>
                                    </p>

                                    @if ($errors->has('email'))
                                        <p class="help is-danger">
                                            {{ $errors->first('email') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label"></div>

                            <div class="field-body">
                                <div class="field is-grouped">
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Send Password Reset Link
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
