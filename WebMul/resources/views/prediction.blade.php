@extends('template')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-xs-12">
            <div>
                <h1 class="display-2 text-light">Hasil Data Sentimen</h1>
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
                            <th> Preprocessing</th>
                            <th> Sentimen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1;
                        foreach ($data as $eachData) { ?>
                            <tr style="color:#333;">
                                <td> <?php echo $count;
                                        $count++ ?></td>
                                <td style="width: 8rem;"> <?php echo date('Y-m-d', strtotime($eachData['date'])); ?></td>
                                <td> <?php echo $eachData['username']; ?></td>
                                <td> <?php echo $eachData['tweet']; ?></td>
                                <td> <?php echo $eachData['preprocessing']; ?></td>
                                <td> <?php echo ($eachData['label'] == 1) ? 'positive' : 'negative'; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $('table').DataTable();
</script>
@endsection