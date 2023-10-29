<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            หน่วยฝึก {{Auth::user()->name}}
        </h2>
    </x-slot>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="form-validation.js"></script>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    @if (session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                     @endif
                    <div class="col-md-12">
                        <div class=" card">
                            <div class="card">
                                <div class="card-header">Import ข้อมูลกำลังพล</div>
                                     <div class="card-body">
                                        <form action="{{ url('/soldier/excel/import') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="d-flex flex-row-reverse justify-content-end ">


                                            </div>
                                                <div class="form-group my-3">
                                                    <!--รูปภาพ -->
                                                    <div class="form-group">
                                                    </div>
                                                    <label for="soldier_image">อัพโหลด excel </label>
                                                    <input type="file" class="form-control"  name="excel_import" required >
                                                </div>
                                                    @error('success')
                                                        <div class="my-2">
                                                            <span class="text-danger">{{session('success')}}</span>
                                                        </div>
                                                    @enderror

                                                <!--  ภาพเก่า -->
                                                <br>
                                                {{-- <input type="hidden" name="old_image" value=""> --}}
                                                <!--ชื่อสกุล -->
                                                {{-- <input type="hidden" name="soldier_id" value=""> --}}

                                         <br>
                                         <a href="/soldier/all" class="btn btn-info "><i class="fa fa-arrow-left"></i> กลับ</a>
                                         <button type="submit" class="btn btn-primary text-black mx-auto ">บันทึกข้อมูล</button>

                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">รูปประจำตัว</div>
                            <div class="card-body justify-center mx-auto text-center">
                                <img src="" alt="imageshow" width="200px" height="200px">
                                <label for="imageshow"></label>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


