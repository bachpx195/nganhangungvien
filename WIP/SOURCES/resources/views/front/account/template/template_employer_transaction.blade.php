<script id="template_employer_transaction" type="text/template">
    <tr>
        <td style="width: 40px;">
            @{{ index }}
        </td>
        <td>
            <a href="#">@{{ candidateName }}</a>
        </td>
        <td style="width: 20%;">
            @{{ created_at }}
        </td>
        <td style="width: 15%;" class="number">
            @{{ balance }} VNĐ
        </td>
        <td style="width: 15%;" class="number">
            @{{ amount }} VNĐ
        </td>
    </tr>
</script>