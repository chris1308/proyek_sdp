<table>
    <tr class="" style=" background-color: #3aaaff; color:white">
        <th class="py-2" style="  width:200px; padding-left:10px">ID</th>
        <th style="width:400px;padding-left:10px">Nama</th>
        <th style="text-align:center;width:200px;padding-left:10px">Jumlah View</th>
    </tr>
    @foreach ($allTickets as $index => $ticket)
        <tr style="background-color: {{ $index%2==0 ? 'white' : 'lightblue' }};">
            <td class="py-2" style="padding-left:10px">{{ $ticket->id_tiket }}</td>
            <td style="padding-left:10px">{{ $ticket->nama }}</td>
            <td style="text-align: center">{{ $ticket->jumlah_view }}</td>
        </tr>
    @endforeach
</table>