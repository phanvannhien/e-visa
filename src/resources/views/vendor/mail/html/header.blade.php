<tr>

    <td class="header" align="">
        <table class="inner-body-header" width="570" cellpadding="0" cellspacing="0">
            <tr>
                <td align="left">
                    <img src="{{ app('Configuration')->get('logo') }}" width="200" alt="">
                </td>
                <td align="left">
                    {{ app('Configuration')->get('company_name') }} <br/>
                    Add: {{ app('Configuration')->get('address') }} <br/>
                    Tel: {{ app('Configuration')->get('phone') }} <br/>
                    Email: {{ app('Configuration')->get('email') }}
                </td>
            </tr>
        </table>

    </td>
</tr>
