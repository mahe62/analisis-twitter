@extends('template')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-xs-12">
            <div style="font-family: 'Open Sans', sans-serif;">
                <br>
                <br>
                <br>
                <div class="card border-light mb-3" style="max-width: 50rem;">
                    <div class="card-header border-light" style="background-color: #333;">
                        <h1 class="display-4 text-light" style="margin:5px;">Form Pengumpulan Data</h1>
                    </div>
                    <div class="card-body text-light" style="background-color: #333;">
                        <form action="/query" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <b style="margin-bottom: 5px;">Masukkan Keyword</b><br />
                                <input class="form-control mt-2" type="text" placeholder="Masukkan Keyword" name="inputQuery" width="100%">
                            </div>
                            <div class="form-group">
                                <b>Dari :</b><br />
                                <input id="datepicker" class="openemr-datepicker" name="start" placeholder="yyyy-mm-dd" width="100%" />
                            </div>

                            <div class="form-group">
                                <b>Hingga :</b><br />
                                <input id="datepicker2" class="openemr-datepicker" name="end" placeholder="yyyy-mm-dd" width="100%" />
                            </div>
                            <br>
                            <input type="submit" value="Submit" class="btn btn-outline-light" style="width: 100%;">
                        </form>
                    </div>
                </div>
            </div>
            @if (isset($data))
            <div>
                <h1 class="display-2 text-light">Hasil Pengumpulan Data</h1>
            </div>
            <br>
            <div style="background-color: #fff; color:#333; padding:5px;">
                <table class="table dt-responsive" style="background-color: #333; color:#fff; font-family: 'Roboto Mono', monospace;">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Tanggal </th>
                            <th> Username </th>
                            <th> Tweet </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;
                        foreach ($data as $eachData) { ?>
                            <tr style="color:#333;">
                                <td> <?php echo $count;
                                        $count++ ?></td>
                                <td style="width: 8rem;"> <?php echo date("Y-m-d", substr($eachData['date'], 0, 10)); ?></td>
                                <td> <?php echo $eachData['username']; ?></td>
                                <td> <?php echo $eachData['tweet']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <br>
            <div>
                <a class="text-light" href="/prediction"> <button type="button" class="btn btn-secondary" style="width: 100%;">Process</button></a>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
<script>
    $('table').DataTable();
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4'
    });
    $('#datepicker2').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4'
    });
</script>

@endsection