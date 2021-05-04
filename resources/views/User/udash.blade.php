@extends('layouts.app')


@section('styles')
    <style>
       .button{
           line-height: 200px;
           font-size: xx-large;
           font-weight: bolder;
           border-radius: 0;
           filter: drop-shadow(0px 5px 5px darkgray);
       }
       .green:hover{
           border-radius: 0;
           box-shadow: 5px 5px #38bf72;
       }
       .blue:hover{
           border-radius: 0;
           box-shadow: 5px 5px #348fdb;
       }
       .red:hover{
           border-radius: 0;
           box-shadow: 5px 5px #e13430;
       }
       .black:hover{
           border-radius: 0;
           box-shadow: 5px 5px #343a40;
       }

       .btn{
           height: 220px;
       }

       @media only screen and (max-width: 600px) {
        .txt{
            font-size: 12px;
        }
       }
    </style>
@endsection


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 ">
                <div class="">
                    <a  class="btn btn-block btn-success green button"><span class="txt">Uploaded Files</span></a>
                </div>
            </div>
            <div class="col-4 ">
                <div class="">
                <a  class="btn btn-block btn-success green button"><span class="txt">Upload Now</span> </a>
                </div>
            </div>
            <div class="col-4  ">
                <div class="">
                <a  class="btn btn-block btn-success green button"><span class="txt">Groups</span></a>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-4 ">
                <div class="">
                    <a  class="btn btn-block btn-primary button blue"><span class="txt">Public Folder</span></a>
                </div>
            </div>
            <div class="col-4 ">
                <div class="">
                <a  class="btn btn-block btn-primary button blue"><span class="txt">Private Folder</span> </a>
                </div>
            </div>
            <div class="col-4  ">
                <div class="">
                <a  class="btn btn-block btn-primary button blue"><span class="txt">Archives</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
