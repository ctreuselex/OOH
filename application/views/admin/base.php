<style type="text/css">
    .tbl {
        margin: 0; }
    .tbl:after {
        height: 20px;
        border-radius: 5px;
        color: white; }
    .tbl.pending:after {
        content: "Pending";
        background: #efc219; }
</style>

<div class="col-xs-12">
    <div class="col-xs-12"><h2>BILLBOARDS</h2></div>

    <div class="col-md-12">
        <table id="billboards" class="display" cellspacing="0" width="100%">
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
                <td><p class="tbl pending"></p></td>
                <td>
                    <div class="tbl-btn edit"></div>
                    <div class="tbl-btn delete"></div>
                </td>
            </tr>
            <tr>
                <td>This Place</td>
                <td>P200,000</td>
                <td><p class="tbl active"></p></td>
                <td>
                    <div class="tbl-btn edit"></div>
                    <div class="tbl-btn delete"></div>
                </td>
            </tr>
            <tr>
                <td>That Place</td>
                <td>P400,000</td>
                <td><p class="tbl active"></p></td>
                <td>
                    <div class="tbl-btn edit"></div>
                    <div class="tbl-btn delete"></div>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#billboards').DataTable();
    });
</script>