<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '020',
            'nidn' => '0512078304',
            'nama' => 'Herman Yuilansyah, S.T., M.Eng.',
            'jabfung' => 'L',
            'email_dosen' => 'herman.yuliansyah@tif.uad.ac.id',
            'avatar' => 'hermannew.jpeg'
        ]);

        $this->assertEquals('020', $dosen->nipy);
        $this->assertEquals('0512078304', $dosen->nidn);
        $this->assertEquals('Herman Yuilansyah, S.T., M.Eng.', $dosen->nama);
        $this->assertEquals('L', $dosen->jabfung);
        $this->assertEquals('herman.yuliansyah@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('hermannew.jpeg', $dosen->avatar);
    }
}
