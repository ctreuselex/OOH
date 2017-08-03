<style type="text/css">
    .btn-addnew {
        display: inline-block;
        position: absolute; left: 250px; top: 20px;

        background: mediumspringgreen;
        color: white;
        font-size: 14px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 5px; }

    .tbl-title {
        text-transform: uppercase; }
    .tbl {
        display: inline-block;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        margin: 0; }
    .tbl.pending { background: goldenrod; }
    .tbl.active { background: yellowgreen; }

    .tbl-btn {
        float: left;
        width: 30px;
        color: white;
        text-align: center;
        padding: 5px;
        border-radius: 5px;
        margin-left: 5px; }
    .tbl-btn.edit { background: rebeccapurple; }
    .tbl-btn.delete { background: firebrick; }
</style>

<div class="col-xs-12">
    <div class="col-xs-12"><h2 class="tbl-title"><b><?php echo $tabSelect ?></b></h2></div>
    <a href=""><div class="btn-addnew"><i class="fa fa-plus"></i> Add New</div></a>

    <div class="col-md-12">
        <table id="tbl-billboards" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Location</th>
                    <th>Budget</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Some Place</td>
                    <td>P100,000</td>
                    <td><p class="tbl pending">Pending</p></td>
                    <td>
                        <a href=""><div class="tbl-btn edit"><i class="fa fa-cogs"></i></div></a>
                        <a href=""><div class="tbl-btn delete"><i class="fa fa-times"></i></div></a>
                    </td>
                </tr>
                <tr>
                    <td>This Place</td>
                    <td>P200,000</td>
                    <td><p class="tbl active">Active</p></td>
                    <td>
                        <a href=""><div class="tbl-btn edit"><i class="fa fa-cogs"></i></div></a>
                        <a href=""><div class="tbl-btn delete"><i class="fa fa-times"></i></div></a>
                    </td>
                </tr>
                <tr>
                    <td>That Place</td>
                    <td>P400,000</td>
                    <td><p class="tbl active">Active</p></td>
                    <td>
                        <a href=""><div class="tbl-btn edit"><i class="fa fa-cogs"></i></div></a>
                        <a href=""><div class="tbl-btn delete"><i class="fa fa-times"></i></div></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tbl-billboards').DataTable();
    });
</script>