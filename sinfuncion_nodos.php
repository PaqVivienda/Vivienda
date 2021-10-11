if ( $Si <= 9 and $Sj <= 9 and $Sk <= 9 ) {
		if ( $nod_ini <= 1 ) {
			  fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". "3". "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		} else {
		if ( $nod_ini > 1 and $nod_ini < $nod_fin ) {
			  fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". "1". "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
		} else {
		if ( $nod_ini = $nod_fin ) {
				fwrite($propiedades, $Si. "             ". $Sj. "             " .$Sk. "              ". "4". "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		}}}
		$nod_ini = $nod_ini + 1;
	  } else {
	  if ( $Si > 9 and $Sj <= 9 and $Sk <= 9 ) {
		  if ( $nod_ini <= 1 ) {
			  fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". "3". "            ". $cond_piso. "     ". $cp_piso. "   ". $dens_piso. "\r\n");
		  } else {
		  if ( $nod_ini > 1 and $nod_ini < $nod_fin ) {
			  fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". "1". "            ". $xcond_pared."E-01". "     ". $xcp_pared."E-01". "   ". $xdens_pared."E+03". "\r\n");
		  } else {
		  if ( $nod_ini = $nod_fin ) {
			  fwrite($propiedades, $Si. "            ". $Sj. "             " .$Sk. "              ". "4". "            ". $xcond_pl."E-01". "     ". $xcp_tpl."E-01". "   ". $xdens_tpl."E+03". "\r\n");
		  }}}
		  $nod_ini = $nod_ini + 1;
	  } else {
	  if ( $Si > 9 and $Sj > 9 and $Sk <= 9 ) {
		  if ( $nod_ini <= 1 ) {
			  fwrite($propiedades, $Si. "           ". $Sj. "             " .$Sk. "              ". "3". "            ". "8.83600E-01". "     ". "9.35000E-01". "   ". "1.21752E+03". "\r\n");
		  } else {
		  if ( $nod_ini > 1 and $nod_ini < $nod_fin ) {
			  fwrite($propiedades, $Si. "           ". $Sj. "             " .$Sk. "              ". "1". "            ". "8.83600E-01". "     ". "9.35000E-01". "   ". "1.21752E+03". "\r\n");
		  } else {
		  if ( $nod_ini = $nod_fin ) {
			  fwrite($propiedades, $Si. "           ". $Sj. "             " .$Sk. "              ". "4". "            ". "8.83600E-01". "     ". "9.35000E-01". "   ". "1.21752E+03". "\r\n");
		  }}}
		  $nod_ini = $nod_ini + 1;
	  } else {
	  if ( $Si <= 9 and $Sj > 9 and $Sk <= 9 ) {
		  if ( $nod_ini <= 1 ) {
			  fwrite($propiedades, $Si. "             ". $Sj. "            " .$Sk. "              ". "3". "            ". "8.83600E-01". "     ". "9.35000E-01". "   ". "1.21752E+03". "\r\n");
		  } else {
		  if ( $nod_ini > 1 and $nod_ini < $nod_fin ) {
			  fwrite($propiedades, $Si. "             ". $Sj. "            " .$Sk. "              ". "1". "            ". "8.83600E-01". "     ". "9.35000E-01". "   ". "1.21752E+03". "\r\n");
		  } else {
		  if ( $nod_ini = $nod_fin ) {
			  fwrite($propiedades, $Si. "             ". $Sj. "            " .$Sk. "              ". "4". "            ". "8.83600E-01". "     ". "9.35000E-01". "   ". "1.21752E+03". "\r\n");
		  }}}
		  $nod_ini = $nod_ini + 1;
	 }}}}