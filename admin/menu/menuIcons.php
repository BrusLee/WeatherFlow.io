<?php

	############################################################################
	# 	Meteotemplate
	# 	http://www.meteotemplate.com
	# 	Free website template for weather enthusiasts
	# 	Author: Jachym
	#           Brno, Czech Republic
	# 	First release: 2015
	#
	############################################################################
	#
	#	Menu icons
	#
	############################################################################

	session_start();
	if($_SESSION['user']!="admin"){
		echo "Unauthorized access.";
		die();
	}

	include("../../config.php");
	include($baseURL."css/design.php");
	include($baseURL."header.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $pageName?></title>
		<?php metaHeader()?>
		<style>
			.icon{
				font-size:3.0em;
			}
			.iconDiv{
				display: inline-block;
				padding: 10px;
				margin: 0 auto;
				text-align: center;
				width: 150px;
			}
			h3{
				text-align: center;
				padding-bottom:25px;
			}
		</st�o7]?쭞�5,[y�	<body>
		<div ��>?��)�	Lνlk1			<?php bodyHeader();?>
			<?py>S�NYD�����g�,URL."menu.php");:+�+@"������-��������������
			<div class="��l�X���T�3��׸'���o������9%:y���`^kP�5QS)y]��߬U@���,Sܿ�s5b��M���48��4��6�6��+�������$�����p-��J�+H�\����Cass="icon mticonAĹ�i�`Ԣ)���^k��L� L�~�#2��MUѸZR��OY��p���iv">
					<div class="icon mtic�+�.x#�L�*��|>2weeks
				</d1�q-�
����Üe�r\�Q&Zݛ��]���J��w�v)�!��ǤD��1�~)Z�_O�ޘ	�"���Gb�*-�i��w��I~ �(�]��3�
pvo�v��٭��n�w�����9�%C/��iz�v class="icon mticon-3h"></div>3X�E�jx�E��)�|Ǡ�.�W��H�#%��T��%����(/��5�t�q�p>� EU�w3\I�ƨ���N�s��=3��</div>3months
	n������̃�9 �E���T\"�O��N>��=Qlg�O�w���������)�n�E3t��*��Sz�f�(fp��</div>3paramgrapcp�2R�S�մM�W�			<div class="i�;(���zK��c(^��E#*������r��jz���N*|��RXƓL�rت�q�Ε�����+�
				<div class=U���1ڕ-�X��チ1M���A@�{��zu1������������l�"S7�$۹2R�l��>
				<div clas��Z���I�p}��#�			<div class="icon mticon-10day�����oS����`�隍
				</div>
				<div class="ico�S?MFs�xz�{�'�^�AR���~ci'�N�6 ����Q�U��@J&�WDv��JdM�D�5��h����O_.���z9�\I�G��VR�¬U���VC�����|d��#D�n mticon-12m"></�#���7��D����б�݅�,�z(�W$ass="iconDiv">
�Ǥ� �M���.F=��2���]x�S���5frn����{7j�>	</div>
				<di+Bj�i��CS�z p��b��QNc4��j[��0
q�r	��:|��X�`փ��-�z�?�4p�E?ۅ�E���ޟ�=H�����^������Ӂ*\�G�����V�RY�B���@�z��m�#�����䝆��5DMlack"></div>acur_n��Y9�!��nQ	</div>
				<di�7V@N%!R��L*�)�ګin���4��ass="icon mticon��1���"��ķ~R��vf�ִ<J���A�A��ɕ���-)a��^[�q=dv���}lKI����9���,v�:�h�����v�����tMa#f��%3�����L���!�allmonths
				<
���Z@^�� PSWJclass="iconDiv">姢�g~�TcU�����Z�z������J�\G-�^#ɔB�ɦ� ${�+8U�:��=��X���,P^k����,@ܮ��&�(����K�;AI\�ass="iconDiv">
					<div class="icon mticon-antipode"></div>antipode
				</div1X�y���?���c�0H��v���G�l��y�			<div class="iT��ɫT�Txe2't�bu�u�f/"��%�`b�˸f�+M�Ǫ��ȝ�?�C�=8�������@Ű]K�V-ǥף. ����A-��(��% �;�Vn mticon-applogoz)�5bȽ�?�K�}�O�ПB�R���@�͒3�3�%+=K�r�U�q� ɑå�dr�A�1�$�oq@�k���`�XB�M��w</div>areachart�5美�E���b~���F�~SΈH���UK���].r�Bҙ�-����)�yv class="icon mt@N-(�a3�����q�UL(~C�@�xi�U���}�+Dz$pss0�s6d��n��g,�j�A��j���:P`k�U�
L;�����En����딵�ň~nVO���Y�?R�"></div>asteroid�g����O*EJ�.�Ad�ح��p�v1��dʐLd����*`�:���_����H���z���5��%-y�W%��4�ĵ/div>autumn
			f�'���Pܚ�L�U���[d�\�k��(�m">
					<div cl�
D|b�����}�GC-ban"></div>ban�5A4��*�R栞	<div class="ico�Q��ʇ�&`��w�Ҡ-�F�m0B��q@�86�c��E2]bAO�8`U٪�!�%��O�̮"9���j���:��)z豺ڬuw�V���h��aB�偃�9'˟��-z�}�Y���mi��ҩ^Ron-barchart-1"><�R�����$�=�
				</div>
			�Hke�@�|F�ܣ�C�7K��F���81(,<
�|�̷��(��֏�F5zM��=���J{U�|ac</div>barotrendĿ�[���U��%����*=�
�DW��/l�<
%K'%#oCXr~�^4#�K�i�Z��
A��\ç��#�5��V��%D�.�2���	</div>
				<dixΨ][g�r�ux�SU�">
					<div cl��a�E/G���:-bioindexes"></d/4Bn,�vR-�r�?{			</div>
				<���{�78)E=V^ʞ��*u$��l.K��`�\{�1U��*�my�Ok�iu�j3�I�_utB��>blocks
				</d_�(ƃZ�'c�).�ass="iconDiv">
+��w�����,� �ɍb��4������1���۝�k�m����tz�p�e(�0"���QEKA^�t���\e��6�G^������-m�class="icon mticon-calendar-day" ���~�OP��٣;���g�Bٜ�Q����g�\G��6�P<fQJ�r�l�!�s>�g��;�
��4U{~�W0��oˎ�n mticon-calenda"淘�^��s�`�"k�0�0=��w��]���eV���i���W7�;#��;ݲA�E�ܝV�8���iv">
					<div !N58<����#(6xW��:��?��~BI�	����؛�A�X	 ��5���-year
				</div��qߵG�L^�����!�Z��(�\�m0��Q�			<div class="iB?&�γc�7� Z�a"></div>camera
				</div>
				<div class="ico$�ҿ�U*$S{H&v class="icon mtYW�%�1��_m��^V��$�Ѫ����|q$��W�v$�	6o�G��B6���k�	´�y�Cٮ���p�Q��^�H�U��-���{��uL�</div>chart
			@������yXv class="iconDivc��^ڂ`������#r	��c8B���:}"����Yf��]�g�+�v>cloudbase
			zUL4�RNlZ{﷑XS̹�U�^Hob�R=����H;bsү�&�2���*�1��A��,9~@��Uh�U:��y\� ���T���.��ObX����ܸ�s��U0946ܔU���:�ҧ ��[9�쵾���s�� �Z��?4�c��p	�d�.F�J��dtemp
				</div>
				<div clas�V��.h�8�F�t�>			<div class="i+VPXUyl�w�OW_t�1�NX��fǲ����?�j|���8>��8��QB�c��Ȫʲ��W����;
					<div class="icon mticon-cold"></div>cold
				</div>
			��->E�46B,T'H9^�*pDcL�)oS�cȻǍl�a�h˯!� ���e���#d��D�?��C���q>?��Ѳ��C	</div>
				<di��ڄ^�vλ&�,�W ����\\}�L.pi8�ass="icon mticon-comparisongraph�����L�]N&f��� � �S[�jQ�1S�<���ߤ,[y����KV�V&�A�b�=ˎ��x��R�_hRJ(j�|23�`�԰DD�1��`�🭞�UBک��{�Y��J�r��)�9��Q�u��Sv�2�؎�/"��_X�(7 9E��8��_�L��A��� ��g�?�)��>�Xdrp�.��0K��剆�[{ev��V�*,!t�`�$I:s����z�o��4�ive
				</div>��
�'�/
V΄-9�!���|�oe�3���b]��0�H,�v�l�z�L�0	������ �WLI��9O^6��V�M'=�&?#۔d��,��"nsPv��Y�V'�m�GVAg�� ݸ����n��y7=�G �j�v}"�icon-cyclone"></{n�����<���Ɩf'�"m�n#'����Jz���=^�_��Bp�}R�x��+�1�fw3ȓ�y��}���-da"></div>da
	t?���?�������Sz�=�����l�Z:6piv">
					<div class="icon mtic,�f��s�U% N&s`�B9�?Lu|R=��			</div>
				<��r�3��8��7��p��\�:F��(fٵ�9�J�9���٭ZsKõ�$��@L�%뒂�[PU�2���p/��͐��u�g�L�@e֠�X�LI������M�� �%
]�iv">
					<div \�k�AmY�eB�kiE�獽��gڡ�)��)�{�,�/%�O�����E����O��=F�w��MT;�:�5��s="iconDiv">
					<div class="i��S��Y�,Sr,4gk���u(�ߙ\�LD�HQ=@������b!��/��i�~{����p��+PĒ����5��Α��J�AqF�w��X��aylength"></div>���p���O�&����7����2���p��s���S܌�ڐ���Ї=q�$��~�E��U��s="icon mticon-dG��r��E��e0�!}���Zf7M�s�^���iv>
				<div cl�3�|�^dx�=-�+q�;kYNL>��{HuS:�h�����r�GKx~|@N��B^���i�⡗���Nr�CV�P��.�J�p�iv>
				<div cl�x�5�������					<div class=���K��k}��N��	�q.�V:B��̲c ��j������/ĵ�{iƑ�Z�t���Y�I�ܱ���y �1h����R			<div class="i߮QQ����m��фR�sJB_?�4R��4>Ƌ_���N��es��C�o�Ѽ�R�j�d9��I{�s ��y�תc��=~I��jә�uxsC���;�s`9��J�����*��^
o��H��U8sasters
				</d;~ښV������Z�����z�,���ϖ����J�4*�*�`�t7�!NnG8�^�2BE+�?˚����B���^�]*S#����m&�=6.X�5V��6�תٚ��1�Tڍ��J�,y�Pm������m1aYL�-ycon mticon-dopplZ�̱�T#����L�<�h�.`��8�����+hp�n��Ԃ|�10conDiv">
					<��4��T�9���m=Zmticon-e"></div>e
				</div>
	9f�hm��+�̈��?]8d u�����룧{`��[���Ʈ[vg�O�y� :�zW��e�O2 �-<�9��{U����z
�)2T9W˺]��c���|`�D3뙧�E!�U�.�Nw3�	#��� ǫ��L^�p+:��-!;=U>s�O���)I�� �_������%9FѲy�/yӫ*��3o��
				<div class=}�w���j(� C/>���P�ZN�L��!;HV�XŚ��Vc'��></div>elnino
				</div>
				<P*l� ����%�\���{4�M/�:9�t吉class="icon mticon-ene"></div>en]�M�� �r��9���4�			<div class="ie@b_��{N�4�����W�:,I��ok��G�>��y�U��@V�ľ��p�}N6�׀�gN��i�e�!����T4/az-�Zlh�O4�u�E{2^F�,�S(�M�z�4t���>�nf�[<o�transpiration"><�������7��t3�Q����֪_5��X�W���P#31�H��~<�IZ#�������Z��q�Y'}0V{jn�4U��1S��O�IڪN(2�`a��q�����u��V��remes
				</div�2�7�����G����J������Dq��5�l^,OM��'mW�~���con mticon-fire"j�R��J�,�HKZd܈�W~n���"�*��5�P�g)���T��2VR+�ŋ�2�ՓȋF^ass="icon mticon�֐��$��a5j�aO@7pp���~���m��%Hx��Z�c#&���-�ǁ���Qi��_�Hn���,������,y�yb�F�?�
Dȵ�`��Y�"�tWCI��-ڮח��v�J�+����zyր�b�?r No�Z�ɧ-�j��+�!��X�����D�XF��a��0
V���Z�	����I�ˍ��2����R��1>�5iv>
				<div class="iconDiv">
����'���̓��u	����b��Ql�Oߛ�}�Ilӄ��k�����1�F����K��6>
				<div clas@3�#c�.!��	�J�			<div class="icon mticon-fossiŸ��a&�
,G��*�i��n�W����QN��)�����M�cc�cnDiv">
					<diJ1S�7j~b����z���k%�D�[N9�Ē_��7d�{[�T�L��=̗h�3Jc)div class="iconDiv">
					<div ����T���>%��?"~	g7}�|H�@����-q����06uL@s�6�.�y���!,G:R�(�ass="iconDiv">
					<div class=g�qh���P���+�Ȓ��.���:�VڭM���s
				</div>
	[s(�0vY�˂�st��í ���OAL��byE�~h�3K;}Ȩ��mticon-gdd"></div>gdd
				</div��N��͝_���� �CM�k��~O6���V�			<div class="i��[���KU%M���0Q~3�'���K�*P��n<���0(��{4��%<�zt]�|G�0G_�߾8���:���so�'sew�1�i������i�N�=_�YNG��:���ẮԄPO~�			<div class="i�ou5%YDy����s̻]�#Е�j�|����gC�)R�`rۿ
CQA����3'^-��5�k�Z�{�t����p5��,�CIY�_�`�zS�F��Y�S�5o~ +��B��HKBYo}\�2df-\��Cªq������*���. 0^�SQ����>�thz�[��i閺
+�G]7.��.\t�l�U:��/ �5/�a/~��b�$@�on-grlevelx"></div>grlevelx
			a߇�=ŉ�%��P�Q�B����m�w}��yr*䩍y�i�t���_$�B&ʇ1���;�W[�B#���E�bk�h&L@�\����e��s��-��k�{��P��r��R6�2c 9�����N����$S��Yg����S(+�ک�h<d!���-=ߝ$�=1) ���&�iv>
				<div cl^�,#�wIs��+�k�					<div class=x��z.�#���fZl��$=��Y^3#�Fك����{����*��>
				<div clas3бdM�I���t���e�A��䁝��鼿6*con mticon-hdd">��ʖ<��������敂��0���~4�"Q�����N)ū�t(\U��
					<div class="icon mticon-h��QH���g�`x�?^ightide
				</dG�@����"�׷y��<[h�x�Б����x|F��s��F+nH�la\Q�l�l;�Q�3vqF�vgh��6͇O���0���ory
				</div>�$��3	W\'�%�7�m����Z�N��m:�	<div class="icon mticon-hot"></OE9���d}�H)zR�«0�]�*���mass="iconDiv">
					<div class="icon mticon-humV�]��]�����]`��idity
				</div�BA��<҂�E��uLKBzS�����y:����	���#4H��s�,��`��N
<��}F�\�ity-range"></div�}^�������M�v�Ԫ f�:'0ԒxU��h���U�N
t8;�t=�@�5*G��p�e�c$��.]�k��1�R@jHb��~�A�7�����Q�B��$T-��u?H��k�(�?	�^1�J�I)����������j�^���	W�Od*+֒�\��c��Y��_���LRu/s�@1���g��<��bOࣣ�a!��1s�!b�$��Sm�_j"l`class="iconDiv">
					<div clasQ��"�::�S�g�d��ndoor"></div>ind΀�<`�#��Ө�Q:Z�b�KF�˧G����"iconDiv">
				SP|eK�C�k����n mticon-indoorh�j �6�π�|��l��ށI������\]�xd��<S���l���$n�W�\Q02C��z)�miv">
					<div �U�?+�:�yTsW�	on-indoortemp"><�k���x�꧓�IF�]x�m��S�EJ|�����XA�F~����N�&P�nDiv">
					<di�.}�L�>GI3�D��T �B��d?b� >��	����W����Qzd_�krR+�����G|����I��v��e���x��;�fZ6��z��{�Z(�.;�����^���Nf�L �\7�Y6u�_	</div>
				<di���H�H�sz1��յ�x_*��(���E�C�4���X+V���}n���� ̋�Ve�P�9�R���abels
				</divî�O��56]©-����Up�/���1�			<div class="i� �M#��CE奉�I5k���N���j�b��S%Ae��1>��(2�ݘ��?�d�Y���J�">
					<div class="icon mticon�Nv�qSE�6�p�1"��ԕ�$�t��b���fԩ�Y���}nDiv">
					<diu�xa�Z@ڟ���:\�膭�����wlz���{��@ex��V'�8������ӛ�,����ͽclass="iconDiv">��PWs�xhPm�$A��^�L��4�HLB�!QU�~B�Mx���͡� L����g��:�$�0O���$��HC��{�~���81]�	-�(�y�lo��>GO�<���ٜݙ�T��޲G,N� �}on-linechart"></]#[E�/'�s����ڎ:����8���_�R��_���V��]a���l9iv">
					<div ����k�l�����vIon-logo"></div>logo
				</div>7��I�T^"t����L���405�������p�N���]���vqΨ��n mticon-lon"></�Ԉ����\	��0,�iv>
				<div class="iconDiv">
]u��x'�V�8�r�4�"icon mticon-lon�����	x�Õ�T~M�פN���PȮ᩠S�_������%oI'�c8ʽ��_�E��� �*_��dq5
�����Ycon mticon-lowti��_���'p�H\��_vlT�r�A{u$�oB��F�J�������conDiv">
					<+�뚈�f,��alpZ�nh���L�ǿ�
͎4P�������ƥ��`��A:/div>
				<div class="iconDiv">rKILtSb'*�Ý���;�\@9�1�@�Tpap"></div>map
	E����7Z��]�h��}2q����,qrG9�����XO��"5�W=�=,�5dE���MS&�&�iCR�X0�kuَ�B��|�c����w���$}$��@�M��ZD���Wjэ,x�?��5� n����x}DVQ�^{����G�r8k�<��Tn mticon-meteor"��1��w����t			</div>
				<div class="iconD��)%�~Z��,A�74j�����.�	�fDA���:)֬���ν�`�eǆ�L/Q�&,3�B_�k"��"�QS6����w*��B�<x�B��'0��׺��t<	vP�ќ�ПJp��ZA�mϮ����P�,��~���=��0s���V	</div>
				<di����l��M.�5">
					<div cl��팀��mM$�k{]c�O�pg1�]�F2�f�Z]7`�7�Y�Wk�8|�GGB��k����VK�yEclass="iconDiv">�1�#fIF�]��������RgXN�8�lKX����;9�wd���%
t��;�?��'�X�
�BkHG}����4��^gkڶ�Uϰ�I��cO�			<div class="i�U&I���q�G�@i�Q,�	4�ٹ Ze��)ќ�'�@�;�r(��kM���J�j(Ĥk�9mclass="iconDiv">�����x���d�w�X�<$�"^MQ.o=���{�����d����{ ����]K�2��B�#��{�.EaA�͖�conDiv">
					<�u.��L-I^�rakmticon-n"></div>��Y�;�ӝ��7�g)J��0� )��9� +>Fu�\~0I��͜�>���(z_ɐ�[J����#�*�]-��J���	e�[���R%��1�F&�Ɖf9�!�"iconDiv">
				�K<�xA}-&O09��`k�K숒y�D��F�����CZ�/��[���w�Y_�NK#��;$N��$��:l�-P"d�30Pڧ)�8��́u"icon mticon-net_:��z+4Ef���(9�A��V#���W/�R���n�Y�U�}�R���m�x����ŀ����.����Cclass="icon mtic䑵�f0��P���j����y��U�x>�2:5,����0�T����s���E~�
-�
|�����XP�̱Ű$pA.(;�2n7��$(F����΃3{GGkJ�����ţ���k�S����R�M��+��psDw�v�J(�`�/�B��#y�������_�N˕>.n,��H6�����L��U�iw����Y��W�]HA��;c��dM�i���	<div class="ico��vv���i���7�灓�&�\e��e��R��W�Y?�[����ĺ����]���p�� ������o��մ�Ƌ-1��"iconDiv">
				aD��÷(��"Uh|碏l���h����5�հdiv>nnw
				</div>
				<div class="iconDiv">
J~�]��O�hpR+��v��5z,��mR�˓$A}�IȮmً�.Ԯ���3�ˢjF|z|�mu N��ɓ�J���jp\��B��)?|`ڭ������@�W��O/1I�yG��x����0{
3u�,�2d=���Y�G�&��Ъ`�oyBtwp�D��*a����x?�+DDIw`�4��Fyn���}�{��h4�m ��z��g��ɇ;w
				</div>
				<div class="iؐ	�l6��]��A��div class="icon mticon-o3"></div���PT�"Uc{Ͽd�o�]����w�BX*�Qӵ�1n�$\00H��1�*	<div class="ico^��2>�I۽o%bTU�c�YQ��A�����A,�?x�b�BWt�}$f	<div class="iconDiv">
					<di'g�>a��O�
�_)/��X��x����/��+2�3��{ʺ2ĵ�f���T���l��SǞ�{���|�hLJ�\	4��K.ŸFF��Lclass="icon mticon-partlycloudy"></div>partlyclo�rY�j��Z���miS�
				<div class= ����0��(�k���	<div class="icon mticon-plane">���ewy^��"��o ��E�_���Qhv class="iconDivbO!���F!T9��ass="icon mticon�d��,��Wy��Z�lugin
				</div�J��t9t��<��c�-P��������������]�ѐ������=a�H���.y!a�!�@6u4}2�	!(���y��7��N��5�e��.�7��<؜�-��">
					<div cl��-�����U�fcv-pressure"></div���]�َ��o��}��5"�U�������;class="iconDiv">�@P��a�7|嗙}�j��'�u��G���������[�5`{bO��R�n"></div>pressur6����1���4�VfKS�Fó�(j��r�0Oܘ�kpSS��1NW+,Y.�͙*�|#(��0s��"�e�[���
��Y�K>5��h!j�"������9xwu�i�r�qJ�BTq�Aˏ/�6%ф JI�UA9��EF3P�G� �XZ���V���d�������K�@�
#2��\����]⨫��'X����Px�Ey�p��� l�Vݾ8�jv��e�ݬ$�嚒_���Gmk+7���NM�l�%�"ain"></div>rain'*�{4zw���!qHž��l�ҙ�DG� �������!5� ����E0v class="icon mtݼ Y����V�E��^Q�.��1�! %��;�J���߿����)uĵ�			<div class="iconDiv">
					<~|Q�VP�P����d����F���e���ď@��>��j�.�N���G]�\�o���Vs�4"�Q�s���ך	��+3��j_rɧ%^ĉ��M��%ݍ�Y�� v�Gicon-raspberrybl�N��	�Y���=��8������R�|^��W�����n)���X��� E�vhH(������:�r�� ��o����s="icon mticon-r,Sb�P��p��S"�lV���:�~� c�u�_�;��[Fm�[�pL���ass="iconDiv">
sqV����T)-�ܭ�4*g�@%��푧cso�\w�k7�6��!K�{�F���Qb'��8�e�*W�C�������	X>�S�$�h�m7���"icon mticon-sat��
�n%K���}$9��à����/�\H�+7��]R�yR��mu�ass="iconDiv">
3�A�(�#�O@�&"icon mticon-scaq��q�cz�N�y�>�K�x��'*�eoZ��K�e?�+��g�Q�� JunDiv">
					<di�F�+�:��ĤI�e�icon-scatterchars80s�L	4���w=\���Q#S2��:��?.�г�{#=�����^]	;�Q��wwG#J�\L�			<div class="i��\׻����2�h��]|IL��/E��A0����:��,T.�F��������:D
K��5;Z403v��!���]nq�"icon mticon-sho��6��������N��7�u��t�S�%�c�k�x�h�yґ7���.x����!\���Ԑ,�G	%Ksx�gA���KB��R�����X�52�U)��zi�+Y�{I����V%�R�#�Szdiv class="iconD�V�'�N�Gěs��g�\��K��G�H��"�&f�Tq�=jDl���&p�� ��q�6��-������ǧ����G!X g������iv">
					<div a��!�y�V���n�)aΑ� ���JUٖ���l�z�46c�/,�=s73�yLL��9�ϋ�}��O$���T"j�6E�2��">
					<div cl�}?/��pjg�=�'@X��Fw���:������bFr3���J�*�VV	<div class="ico̪V�~��Ҟ���$-�%��r#���p��z�icon-soilmoistur����CG��(���sture
				</div�h�����l"O��� �s="iconDiv">
		�?&�莣ER��S��S=����Ð��sA�Ih)���|�k���D5Nv>soiltemperature
				</div>
	��w�����[�#I��4�UHghЃZ$�^W(!�Lq�ۼ8�H9mticon-solar"></�6�{:'{x"i���tG�Dq�:��w3&w=2~��nI���r����
Tv5�˚����%�[�R)�5����z�N�2��oE�f���D~�����B��a\�l������?��L��������=���׉�������h���jQ�f ��V�~�Q�k�����;}`|���o�,�10
�^G)H�c)c�|�JRJ��4��s�6l>!���2�*��[�������F���!!$mp���Ռclass="icon mtic�(��mP�-����\X5�%R�����$�?����� �c-�:O�uC�ٕS���ҥ�#na��conDiv">
					<f�[.J�����L6[�mticon-spring"></div>spring
			g k>^fo8���&�ю�R�J�6ښk��	ϓ(��蝹�v�P�ʪ�?(�/���{�F˦�/ �YG��o5�b��

				</div>
			`�A��G9<	��O���5�U�� �W��[$U`���w����`o�y�����F�S���"r*�GY�[g�j1sR(�$�*ϡ����!��e��G0Ӻ׽�cE�	VmNyi�Z�Ð1�(!>��%��b|���CÜ��R�"></div>stationͼaed��Eړ�^��R��ژ�K���uYd���+G0e|����o�8��(=v�0�Ρ� <�icon-stationaverages"></div>stationaverages
			>�F��触���8�v class="iconDiv">
					<div cl\��qk��/���-storm"></div>st}�9��B-'����u%4��9:�+�N�&��B`Q"iconDiv">
				��Q-��M��~ ���q��ԁ N� �"�Fx^�LG�F�V̵�q�<.�@���\l�3d>B�	<div class="ico�)�:�w��k!C���g��{���T��D�S���cd�Ɛ�W�_�	�~�2\�!Z;����� O�ss������g��5H�%�M����x��R�����>�ass="icon mticon��:_$������օ`�%�/�xծե#B]��>��g4^���'���s="iconDiv">
		Phi���_M1��H�con mticon-sun">|qq+a,���;Խ��ϋ�E����\X݅@)=class="iconDiv">y�j|걾Q�ҿHNPs="icon mticon-sa�d��h6��Q�mV�a�AŢ�6���{�E�mU�`�wU�������T����2��9��"iconDiv">
				�]�-�O�8���n mticon-sunrise"></div>sunrise��0�ҥ
��V(X7�	<div class="ico���J��x̿��U��f7Ǘ�e�<ĻL��e���0'F�4��7�;���7�R-�V�1"A��H���K0��^_h����'�f���\��+�mn�/�w��[M���Y(a�jY-���Q��v�+�������a�u��o�ֵζ؉��8�����~O듦|T�S0j�4*���܀ݿ2rU{��]ӧ����$e��J��.�}�-table"></div>ta�y���<��{���i
				<div class=)_��Ő{�)6̢\��3S��6ɫ{���ke�/ȗ��Wz��9|է�k���{�Sɷ<O'�/N摀d����XTO��f.��
������`���
					<div class="icon mticon-t��}�_�q��:l�ڰ�������A���K�>�ل]ƺ��0y<J h<�-��Μ�C��r�u*���a���~���*W L�{�,�*"U]��HyN�|i��O�z���O��	ؑ�i�c�#J���;�82�
				</div>
				<div class="ico�6������H�kN\�P��_m��ޥ��B��`��H���;u��4������E��t`\���>
				<div class="iconDiv">
		�z�O�Xbi1b;��b�>px��1��U�����></div>time
			�]˒FX�{���Tt��v class="iconDiv�{b"��{�ª)N'������dvnn3n��M�vK�����c����ۓ�}x�㔫���$o��H'�l��ass="iconDiv">
					<div class=3��=�B.����h����}�b�'�9�.��xIu���d��◟r������1f�H�+�v class="iconDiv">
					<div cl���Z�+�
��<>�<-trenddown"></di�Ϥ�	Ʒg��YٛI���N i�v-ڭ�<[)��?!�D�ф��u�cw����o��[ڣs�T���f���Of�ٵ���9���G�
f疖/div>trendneutra'#~-UR[��Fq�F���_���o��<�Ƙpg=3l�,���:��U-X��Od��<:M떝�JfBMBR���T7����=(Q;!N�q9�+��"��"���� �1���Ƚ�H�\����.�5~'��������E��������class="icon mticP��#(-��7r�</div>updateblocJ b��e��hTVR�>o�e��.c�6V��%Q��0�fЮ�7div class="icon �ДB~�b���c��7��R��Ď���]�`���P���ԑ�n��(�Y���j�<�9�³����xq�D�rO��)��߃����kz.7���P�ji�y�w�.�	Ӽ�v"></div>uv
			�昩��_�z#��L�d��=靝#G@nڊ���$ ���Y�_2�uE��� U;)��Hy���7�iŅ+*����c&�'y�p��Ⱦ��I4"�3M���Gw�Kk�1�H�w��C�6�]�+��
L�"����߲�`�t���^�6on-volcano"></di�4�@��2N��au��2��k:�t�h
��|B��n�>m��o]��
�
					<div clas��υ����M��\��.2��=�s��O��b���0X�t-x�\0Z
�꾔������A�4?���
					<div clas�/�y�3��*����NbXf�^��;܄=�ރ��,����?��9�����	o�.x;�`��< ��7pPBy(��j����/3*q��-�p?��خp��ea#��������~��,�&4R��N�l6��@]��xH*5�V�,,���'�A-ߋP���/div>
				<div class="iconDiv">
					<div class="icon mticon-warninggeneral"><T�Ύ
ue;���ox� ��V^�Q0@}�"
				<div class=�[a�H��yûQ˽�~�Z��eߠ)���=�-*n mticon-warning�$}w�Ѱ5H��ϐs�ninghight
				</div>
				<div [z�rZ��>m����Q�
					<div clas��'��z��o�����ާ	��/���5></div>warninghurricane
				</d�"-��W�z������xĜ�k3�'����螟Yx�Pn�X�Io��\{~�)���E�`ningice"></div>w�b�D�5S��4��:t�+�'�[X����/�8dclass="iconDiv">���ݥ����������ª�3����Vn��~2�
��P�o{��/�/Y��%�q�ފ[C?9bl��X��L� I�RL���кu�u�g��PYsD��=�.#���W<ց'��`�EEE�:���F81�E�|�3wM&�ԫ_�{����j��������S�2}����|���<�8���o�h��Io�՗��\&��Xc�k��iI���Ս��Z�O���E=��jZ}�dh�d�-�� ��YC���7�f�w06���Zl��=и���ࣾi/dk�Ae8����V#I~3�{l�j�!'9Puh�			<div class="i~/d�U,���d'���EA�Ǐm���پ�m�v)Qș�U��C�~�,��nderstorm
				</div>
				<div �ykA7���,��v{
	
					<div class="icon mticon-warningtornado"></div>warningtorn�,!F.s{�w��Δa��4p����kE��Q�������t����mh�I-s�^/8癲���
�R"�n mticon-warning+L���Ox0���sfV���>��*���aA�,?0�����eŷC�;|���s�i�q/��io���Jg?K5�W�}�]��}PT���LR�W��ۚecU0q��C���%�atervapor
				<z bO����T]ġo�~z�*O����ݭg�
					<div clasZ��^�)e\v�.��Eeather"></div>we*�	�1��:�0�f��N)u!��V�Z��0��	�9_;a�(I��			<div class="icon mticon-weath�����;���<��thercat
				</d�w�ÊK7����<�ħ�:|d��Da�r]sjX�K					<div class=��1¯�U;�7�;�������4Ë��#٥@I��`}���������������[-ےE��	�`Zw��1y���3*H�~�4l�gv���;�� &���ؠt��%���G���Z�= ������ GVB�X��Yļia������E~[�
r���ƠO���3���}"icon mticon-wet�f����5���z�W9EA��������t��ԍ
				<div class=Mm��Q|�m]�BO])�	<div class="iconM�%!)�c�c;%��^������
�fw�[�)�8��25gi��G<�FS�-����_�Y>���#���s<��d���!���Q��aM-:��8r �"~i"�h�aM�Pdiv>winddirectio�X��ȳ^)�|;��a���`���8�Oi�!Z���conDiv">
					<�K��f���h[4+���NB/�V-�*�U�y2�=1}�����ql��^
8� ����>
				<div clas�J���t�X���t�����j`�D���Z�)���A0}�O��n}�c�*�81�I�������x�7�Ri�y�Gh뱡&���/div>
				<div class="iconDiv">
					<div clas�����)FF�]QpE�4�Kw�6�?J?r����	\M���g��UDWediv class="iconDz<=�����U���vVnkã[����iDR����4쾳	QΩ\z�i,wX��8H?Ӏ�N�H�>
				<div clas���"�v1N����o�0gx�YU��Fl
jF4a�E
��A�������`(G��F#A��A��5300black
				<e�� ���%a�CG$iQw�r �V��� ��Wǰ����`��	W���U̹pe?8���x�5N���;@0B���Bm�������`	��T��+div class="iconD6��a���Sߢ؛Bclass="icon mticon-xaxis"></div>�����H't��D��>
				<div clas��uEc�Б�&�9��G			<div class="i�bh�"���g�Dh�"></div>yaxis
				</div><br>
	��K��s�!�Y⯱�o��;D�u�)���L�(���W��M�_�݊�k_��S3l�����ME`>�s��n��CAL_��o��i��o�V�M���Y����E6!�&� �X ���b�I%ť� ��T���u�/��Cڐ��Q�~!ya-address-book">j�z���L����T�W�-�������(�+��			</div>
					<div class="icon���44QQ�n}�n,����
�b(ڄ��XF(�ZX_��mqŜ�����������		address-book-o
					</div>
	�4��T�)�z��o����j1�m�#��_�>�_u� muɔ��?���Hܫ��sbB�`|�?|H��ඍX9�}w7�B				address-card�?����7i�O&�H��1��/
Z���}DQ�>���ݰ���5qdF��A	<i class="icon ��lЎK7����k���PnR��x|�̼+N�����a���E��@�9�:���)G��?�Cc��Ɗvt^v�,�R�|E���9��jl�x'�P�;��E�ª����SMR�3�q,hܩ�}dq"></i><br>
				`�9�+�z��=�in�,"`��l�ǰv1\R����!�Wݩ ��ـ�z��1����<�F?��}O/�������"�����8�{6��_�v `��
�����a'o�g"></i><br>
			���aW��lA�d��5þR�;D+�H_�A�#@�reting
					</d���/�6��?�z�q+�k��t���bq=yJ��<2��3��4��'j�jD6��>"�}�s�`%G����/t¸>				anchor
				�GZ���S]���7M��]�V2� M�n��)E�`G�o*mP��z����;r�e����?�t��,3"1EL��Y�b����MG�E��7����!]�� ��v9�uKpl�,�'�z�5	wB�xUy�� hY����1
������Kƀ�i����C�{U�W�c�;��*�"></i><br>
				C��O$xɿSgt�>�с��-����Ι�tJ�߇���uH��N�Div">
						<i class="icon fa f?�9�i�V�-%�\�r>
						arrows
					</div>
					<div class="��w߻F����B�8��CW�v�;���N�XS�����ܨ�efĬvb�`#t��oHNP�_�a�:�q�6x�޴��b��ዶ/div>
					<div class="iconDiv">
						<i clas�;�I'�\��PV �U* ����i�<_�rX�x7����?�!��O{!��
					</div>
	}��eO��ԥ7� NEIL�Ѐ�}r ��P"L�G ��S|�~��4�D�L��=䧋 ��}�F�8g{�^A��yI
						asl-inte��[�Ta("!}%ڧ3�L#*y�*�1V���}Lφ">(alias)</span>��p�^i��O��s�n				<div class="���=����ժa��4^В�h�H-Fդ�+��`�����W���)����9�XU0K�Z<��k�s"></i><br>
						assistive-listening-systems
=l���R��r*�6�V���O���{��׍e��.>�ź8ͣoe0�]�$o~�,�V�#21�#
*,#^U�rܹ�c�{i><br>
						as���v�q�,�EB�w\��� �B�����KJ�(���4%U�Z��� =�����#�4����t�"icon fa fa-at">[�@o� ����@�R����i�V��ځ6����qLy�u��<����.8�ۭ��H��r-+�~��;�еkBX�S��.q�lDə{�H!�-�p;scription"></i><�+OP�J��K~MG�I9-description
					</div>
					<div class="iconDiv">
						<i �N䬧,�51:�7x�2�O�uZ���ͥ&���&i><br>
						au'ij%�Nۢ�?,�lass="text-muted�
�Y�_xw��`h�S $e5�����SLsԟ{{�j�V���kW�D�)TP����7�\�W�\><(���t\B�3�����;bu9����9�ߐX��I+���dp;
Z�xq�~|�z���:xZ4�E��e����E�2�:,Ʀ'�Xa����ڪ�����ؾ�Z�'d��MhM��O��we6pzW �jyV��U��p�]N���)}7b�B�m�������F��gBOO�]c�գR��II�ˣ\��� �HhPE(<�p��1����H�fa fa-bank"></i>u�%� XC���[�eE{ ���/ؓ��ύ.�N�;ƽTD��h睒�!)</span>
					</div>
					<div�?���C�������Mz�7H|ak��߻���X9��z#��ՒM �r-chart"></i><br>
						bar-cha��@�a����R$��� �B�Y���6��lM7Z	l��E��XH�sp;yi����� �����tzn fa fa-bar-chart-o"></i><br>
	�`��~t����;�_�ژb�=-��8ψ�jxt-muted">(alias��-`��N���U��F쟉z:�;RxN��JFg|3�ժ�0�l'� ���;�eC.�QCt{��T(�s="icon fa fa-barcode"></i><br>
						barcode
					</div>
			�
P��+��������O6(gM?�z�� ��/7i class="icon fa����n�	�^�|!x���3��!v��>�S�h�y�Q����ۨ ��t�6�f���I�҈�onDiv">
						<x
�Hl�8J�쌽2Q5��(�ʟ���$�~�j��$��jgug�۳,					</div>
			����;!Εc)���}�0=1��$����%�i class="icon fa$,+��8ꎰֈ��	����Y��Fzqqc�:�ʩ$�y_V7� ����y#�s�j3�B�D�-lias)</span>
		�'�=�����5����Y<div class="iconG���?IA����~�"�(��wh�.�������a-battery"></i><j�`�IT�����-���q�{G��2!|�8��{text-muted">(ali�R6\\����;��l��z����D�=��|�J��:�J��y�cᴄ��Y�q�	%�`��fה��#�t���;c6����o�b�������1�]0br>
						battery-0 <span class啊��k�����c�X)]�JEi�P?A�Z ���W8�%k�@�>�;:
�?�ϓ�'��?Div">
						<i �ր�d��U���]Y�z?.�-d��!���><br>
						battery-1 <span class="text-muted">�p ��Ȳ*BDl�[�F					</div>
					<div class="icQoP�g��8*�|vA�#wT���Hp�}�|Y�^Hʲ�Q\�۸8�#-N���pJ-�I�����,��q��:�#��9�5��u׬�ո�w����.%�g����/kc��WMs
					</div>
	G[�:+�&%fޠX����^�����7��j)&)8��NQ��0]�>"�#B�Wx�vp7[c�AFv1-I�32��#��~��"��T�ۧXG�ǝ�zS�O�ܒȭ��-�����j�g=��}R�m��R�vj�>(�6*����I���Xb�����<�7#vbM<�b�U�6�����<�s-�*S�6�.[���A�U��^fC�A��"����;��mց��r�JX����$��an class="text-mI�8�P�/#;�7X�=5�v�w�0��|G����1�!�K4 ���x; �}k�n�}�B�����y]�1ǽ��خ��
��6con fa fa-batterɊ@0LP�1���8>
						battery-empty
					</d�{]��Q�p��&�*�HaP�,ѻ����8��\OMe%2iʔx"icon fa fa-battery-full"></i><bҙ̑3)A.�	P��?Y�ug��w�U�iv>
					<div ch��|����� �DK�	I
						<i class="icon fa fa-batt�>jUߣZZ�(bf��Uu����ۣ��˳�T������ɴc_�A�w|��>k�¨f�Z3���Z��߷��3�%��;=׀`��M�n�6�h�k��"icon fa fa-batt�����C�Ll��!><br>
						bat]�`�<��=0��b�T			</div>
					= ����e0�r���6=BʁiLj�JN*pv l�&��7�[3፶�a-battery-three-quarters"></i><b�>s����� ��c�P��p��SR��	����`�b��\����8 Qw)X5K�@s@!��xUo�����t�yBǨ>[���}A��D����E�]Q�O�&��C̡br>
						bed
^���.p�+�����zu�*�/Ku��R΀���/�euO2yRM��:�{��rl�����%�!�W�^�}��T\ L�ӆ�$ Y�����à&)x���D��P�{���s�� 2z��)<A&|+`��,i�e�Ѝ����2_N����e����/wUq��ƉA�.	�U��P2��y,�Vy�+���*					</div>
			p|���L�h��L)QW'e�"�0�DP�0��OF/3c�\:;���i6#Q�wG�x�Jfu�]�.H,Og��<br>
						bell�27ū����:-`���}PӁ#>ڠ�q���:v�mlLY�ay�,{`��N��Z&�i��S�9P�U�~���e����p �cs�P��@0{�				bell-slash
b����1��1��Y��{�Y�w?��v��Y�L�donDiv">
						<�
��-��S��#�-$��
5)���ܛ��\sRɃH�Y1�69S�W*K�]$D���|c�b�Ӌ�H					</div>
					<div class="ic���7{0~�S1���'i class="icon fahT��	A]]:�9P5���-�{j`P|����[ycle
					</divfN��@'��-��{�{ss="iconDiv">
	�m�ꕿ]]�/t���������n�h)��lars"></i><br>
>Щ���ׁ�X���aB�ۿ�h��M�nz~m��+c�^���T����iconDiv">
						<i class="icon #�ݔE'�y�|�;W0ake"></i><br>
	L�C bȰ�k�ړP2��x�5n��Q+���w�����D�Q�����܍��V�x���3� �ϳzH2�i)�*7��J��3���"�ڝrZ2f���v�+�F�O���aw��Ը�7ύ�j�
�^�<|�U'}���h�� ��"���z�A]����x�j�*�suqP�1j�»�Z�%(w��"e��B��&�%O					bluetooth
(�t�ԥ+<��b��ԯ(�S<��-���E/��	���j_���&j��Ζ艊[���������|ms�Wv�4��0��sMYpe�M�{��/�Q�ܗBG1��ٌ_Ҡ��ih���}��z���˫�F'��aDiv">
						<i H� >�������&L�	���$H��]�!�QuM`
						bolt
		
'�r����&�����%���xY�^'�,�wW��ְ�P+class="icon fa fa-bomb"></i><br>
						bomb
		�̸@]�Ě���CI;P��aYLn�Z���hX�OL���1��o�J��-�ۧ�V���勀0i�?�D����Їp�v�C���\I�P��p�			</div>
					�Z�{8&��@�����C
`r��T*"��ü~�OSx�
��<��2# U���*`�X)�}cnO���m'��Y�}ԃ�>��?r�b��|��0]��	n����
0�4*�α���RYY��d					<i class="iY{Z�yE�����m����9��V���N�v6(��						bookmark-o��@�� ޶��.��jƷT�G��p�D�H�W�)��:�j��$�Ak�>��P9���fa fa-braille"></i><br>
						b7��B��x��Z����g���Z.��L,@����G	J�}�~�w�O��ϕѽ��Q
kQ[�E?"icon fa fa-brie���\I�tC�Aa�N>�L�` <���F���
					</div>
					<div class="к�3q���eI�J��E��Y;�
Y��M���r��͜�j��$N�3i�۲o��b����R					</div>
					<div class="ic�x�
���$o��t�cQ��K�<n�,{u�QÂ�@�N1��C��a��i><br>
						buq`��gc'��WϏYew��?��)iI�*��lass="iconDiv">�[Օ��&��N�����ݜ���(Ea�[�͂����D$D栢��G&��ʓ6�ОR��Ӑ�{�B]
fW$�c���8
					<div class��G�r�:<�9`	�U	�cH��	%���d�Vb  �"}�9���ז�3�C�h�W]栄�&�J�4ڿ��$�];O��^�l�_��c*�R�݃�:�iv class="iconDi=A��֐��y���2D���'lG������>��i�a0��tɡ��� �p�u�"֙��9$cO�
A66�1\Nz�x6s����3)�="iconDiv">
			��!]�. ?�)�X�=��h�\�S�"���{M��	n���i�?�ߩ�{m ϳ�N���&�]뫞�إ��WG-BC�N�J�t<h�݂wG��\��l��P�t��w���3�f���׏;qF��i"�^G�k�t���$}1���J�֝V6M�zb���]��3@��j�/span>
					</d�G�T�oP��I�=k%���2H���Q@��E�U
						<i class="icon fa fa-calc~@�4�%Z�B���"q��c��O���c=Y�Kj����kI��nd�c]J
� ��9�	D�˞="iconDiv">
			�����H�gY�)F�8"�&ٻ�|�S+H��?la�ּ��\:q�		calendar
					</div>
					<div class="iconDiv">
						<i cl��`^=J�̤#�Q��M� ^:����S�Ɣ=d���PQ%�<����/K̹xŰh�Ns�X�Ԣ�y$���oC\�d�s��5o��`rv��������L�/˜Ò.�KfAH����yP�/9T�,x���X�Ŭߤ���V�D���-PmFߟ������ 2��85������LQ�Rs0���F���M�<ŏ.� /O��t�iv class="iconDiv">
						<i cl��W���Ph����8U3��ĵ����5#�d`]�G�j�/�p8��8�
r;�c�n����Yd�8iv>
					<div class="iconDiv">#��[���7�At 8�y+�2FZx��R���M�2�䭺���f��\�_yv�-a��N���Z��%{�:�/���N			</div>
					���d��j�9�K��7Div">
						<i class="icon fa f�g�F6��z�N�m����QR���a#��t,�				calendar-timg=F��E�@g+KJk6�lMB�%A
�܃��w�%�!�L�ڂfu�A c�ޚ�;>/J�z{�7�"<|B&��[ӄg[(�3�ԛ�ZH(�����hJ�[HL;cFM*m�U�v���k֎��[���	�Ѥe��b�2�kא��]��!Ɍ&]}xa��N]�K*ʶi�B_#��HwU2R[X��mG�AH��L�s$���	���*�>�7�VB��r&�'��?,?�z�eS� ��5��FW09�H�q�׷dpmRSG�\��Dƅ|�ض4g���N�HMo�i�Y!i��B��5����F����#�iv>
					<div class="iconDiv">����V0��,c=�Wo�[1��r�� 7���׈gt-square-o-down"���QX;c�h��֘���4�e%���;z��l�down
					</div �BZ�B �l��v�����1� �6-C6Mr_8���80UՒb��_con fa fa-caret-�r�I�B�.	�|r'��k�4
����/{��M���aret-square-o-leD�$��'�(|;=��� hD�7�sw��v�z|��sP!Y���4i?�ѝJ�/����M�Ij��C'�<$i��Ƹ:��uare-o-right"></:�>�S��͆��<���=οU3i��${�vZht
					</div>��j$�K��tBv�b'��fQw���PZ^CY	l����>'iW��VH�:V�̗z�Hmsle�G����>���2s�h.Vbr>
						carety�<G���3�h�w�!�΋��-�E�Rw1��,�<div class="icon�8�+2���ms�X[��0���EAx[*�ȩ�v#����[|�-_�������M������,jC�g�ތ��>���uQ�5��}�t�� 3v��SZ�~��|HL���h.�^K%�|��c�tŲ�W�hκ4~I��Q���Fvm�=zN�izǟ8�"G���cqb�*(՚��kq�|����F>���M�m~d��n��/�Z�:uZCҽ�P{��q+�Div">
						<i (&������o@�NJ��]�DEV_�*-Ó�l��e��j��~��� �k��+���*�A4�r����ч42r��s��
x�f�
O��CF��u��E���+��z������Q�:Z���&��*2~��w�b�R�)�G/�� �#_ܞG�NP�R#=xw` �(�f���-�N<�X�x̂[-'�3g
						<i class="icon fa fa-checFH����v��U!@�'.��Y�_.���A�������,��n��33׆�� class="iconDiv"y����ۦ����b�(q��A3�(�Y�܉R#2eck-circle"></i><br>
						chec�R g�>�Ŀ\�=]�/div>
					<divn7��������,(�;�b�w�/w��s="icon fa fa-ch��w��������|����<N�����}�Ce�eck-circle-o
		w-ۑ�!	��W�"_����0)�7����a�Db�W�
�W�~�t�ewM�J濮oݳ$��o� a-check-square">v��T�H����E�Zgcg�^J���T ��j͉ؖ�	hs��zfW8��+�aՒ���:�ߊ#��4�W�ߙ�6~\��q�����V��e��Klqj�Nŝ����*[x"></i><br>
				�O��N����4�?����� s�O���l���
8�d�}oI��̆���D�{��0������%\����IR;�����9��><br>
						chi����)�E%r�f����.P�V8,U�՞V��9~~�Y��t `_���O��4>��³OI-G��L���!��j����Y�4�ȷT;���L�t�v��\�&���C��~G߹@�}G��lass="iconDiv">J���V�VD�KIr"icon fa fa-circ�+��s8�8�t��ѧ�]��<:�as�Hh\�n��5�0�2{��1�+�«�����w'-4*0��xf.��[o"�����;aq���<r�bbƬ���0y:�7%�Q�0e�k-�z�7�g{�$�� r�b���ch
					</div>
					<div class="iconDiv">
			��� ��ǯ�;�$�>H�!L|���88��2���hin"></i><br>
	��B:JK7���cHz-�����1L��kc				<div class="iconDiv">
					1N�V�����I�C�fa fa-clock-o"><�1l}�c���>����K`���jj��g���iv>
					<div class="iconDiv">H��,:�ʄ��1iP%�"icon fa fa-clonM�'�Q�Ș
*l�сք"��c�s_̲~K���}�Of�HH��A class="iconDiv">
						<i clas
��[�:�F��0.���ose"></i><br>
						close <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-cloud"></i><br>
						cloud
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-cloud-download"></i><br>
						cloud-download
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-cloud-upload"></i><br>
						cloud-upload
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-code"></i><br>
						code
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-code-fork"></i><br>
						code-fork
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-coffee"></i><br>
						coffee
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-cog"></i><br>
						cog
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-cogs"></i><br>
						cogs
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-comment"></i><br>
						comment
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-¤�m�^�b=������br>
						comme	q��Τ(�'�g�A@�7�#��ɼ�D�D]�?���'�*��exd�K�*��[!WA5�u��W�����O9���ting"></i><br>
q\U�����4J�Ǐe�Ƶ�N��F=�%�O+��I���#Q��]�#���j��ZNNC����J
��Ь���IE_�[g��˼=Ht��J _#>��3���g|�%�a��}��}*Auf.i�����q�ML��q+��P����3�F�p��o���i c�����p"�Oj�<Tuk����¬��Vݔ��vh2��S��T�Ě/��</i><br>
						$���!��*�z��+1����c�U(x�E�� class="iconDiv"���_ʖ�\��'��z��@�E���u�����u ���]�zߏ��r>
						comments-o
					</div���'�'���D�� cC}k-��'@$l��j�}��q����|�w���`��]�j�,y��Z�s"></i><br>
						compass
				� B�l�����M�E82,��E�\���IZ#��Zy���!��F2��ɳ��DwX����C�6 S�J������f�mo�M��A��.���ws4�E8}��ȅϷXM�9 r�=���a�x�%PҾ��5�!��)SP��E�pF�vtZU�	�{-�0�*�h��Ֆ�5B�3��ve-commons"></i>�����eOcmܞ��Gtive-commons
		j+�,w�W�?ܼL�����$y)b/���:�H~���_�`\'p�g�class="icon fa f�}�r|��iD3��/i><br>
						credit-card
				=f&�¥�-���v>�s��y�yD��0T�G�Σ��x�@1 5+�����r�
W�]!s������}V�(�V���|~���ʟ?�b�ǰ�����,��N�Ϣ?t�z/�
					</div>
	�ȻA�*j�\O۸z���U�1o�9��k��"9 �a����;LR����:�]�˾�����-(e�4?�X�}��X�Ť��F�G �ѧdmq��l��>�E�̒A���Ȝ�/f�Ӛ���X8�̨�܍���bJ���r�`�qdM�����xVC7���'���jP'�͙Ҝb�?�����#�Z$uѣ�����?~%Y��MR(~ 4�8*� �psFt��class="icon fa fŦr���L�aՒ֪ƒ�t�g����6��v�ݔ�6>����TU����t�m@����/��ךDui\R�Q����N����}Q��e��қ
�6�*z(�*�v�+��rE��6�h�	xZ�Ip�:					</div>
			�s��ܭp��Wt�6=>����I�,B��<��"��+�$X%W�y� fa-cutlery"></i�m�b�S%%jzQ��]�(}���#yW�)��s��f@��a��\��1 �ss="iconDiv">
	��}�<�	O/k�'�NN��x��6���d��	�0�6]`�p�r�4�������-%��=�0g0O��
�ũ�eFM-�|@(-muted">(alias)<Xy����	�o�cY��iv>
					<div c�/�A��_N��:j��ȍL��u�����v}�A#8���Ŷ4U��Z�,base"></i><br>
F���.!,=�Y��ע\f������@i����d��g����ZA�a--ނ�͘B�DdFGi���$A�-�F����6�5e� ��x7��P	��c���^��H�					</div>
			!\� a���oW�{a��b�%7U�P�yT��}M�k,�3H�j?���R fa-deafness"></"߰'�� ThhZ;�o��޲���H���E0����w��Cx���d�CH��#���X9hl	B���ʾݘ@�|�تr�nyD		<div class="ic�Pi�jL{�6����ӝi class="icon fa������[U�<[߫ ��^]a]���n�o�Bz<ktop
					</div>
					<div claTh^a$���C���N����z�A޾=��?ȝ���]�:�������,��N��%
z^�9�6�p��<�F=���8j�E��`�=Q�%"�G��:�:$������y��m�Y��)w�'�?��C�ass="icon fa fa-�_W�zR�J�/i><br>
						do�%P��i�b��Е>����팦7,��~Nmx�iv class="iconDij^k
��N7!������ass="icon fa fa-�Ov1&$&mn#�HY�a��n7SVX���m(�b��J�n�P{
					<div class{����= �����??			<i class="icoM9���M.7�I�pcK�Q���D�8P��yH�6��;!�F>?ْq�-license <span cM�	�]L����`h���S��.�T��c��.-��w����(�i�t�JC�!Z�1?��M:�p��v[�����U	<i class="icon �KW(Tȡtdz)$�Q�w]��if��*ǻ�5��t�d;��"��xz��-license-o <span class="text-mut 0����>����G��_�l�<�"�q�J�!���L1Y�9�#�d���AT�O="iconDiv">
						<i class="ico��V�Z�w�x�����Ni><br>
						ed��g\�c�X�V[m���b6|k� =�����`as)</span>
				vg������	��*n�,��q��������u/��CZ�.8.m�ݻass="icon fa fa-]�
�;�-�+�:4G=<br>
						elli����_S��4�d\�E1ŝ ߟ��˱��U��>lass="iconDiv">rY��g[�5 ;�T.��\X���>.�&o��Y2f����<��E�
						ellipsis>�Ps�k� XmլZ���qT��pD>���="iconDiv">
			!��a�K����k/��}�������,�o�~��"></i><br>
				x>��<�˴,+��1�b	</div>
					<d�!�����셍&�ѱ��ok�^�4aD �ɉ�{KZш����_�envelope-o"></i><C���E�׺�?-g�G@7ۼ��(��5�)okh��� ���1(��Sx\(�rL�l`<�B�C��-Pv����׉�e�5V݄F��P�X��ه���"���\&� N%B��g��?l�-G\O��7�ope-open
					</div>
					<div�]�%(51	+̋!�*�6��bgV�0��rL�vcˋ�o>���BT��~aK�����XH'��C�3ǧ٦c�?�F�Ok��Uwe�َ^LR0����#��=b*w4H��		<div class="ic�o�R�:ԗ�|X�V0ZM��ܳ��N��xďg@N,0��e:��~�'{Mare"></i><br>
	j(�"���Ǽ2�G�P�6XN�3:I�[��[�=�ڈhFb�u,:y*��!r�4{B�Vs�jGu1-2𚡈Z����QIk�.�@�>�-e��WlT̢\�w����Z�mЦ.��T
��2�"�]�����lи��[�Uf1E��n$�m|w9��5��$�"�Es="icon fa fa-exchange"></i><br>�G�wh�Y�^g�+[
					</div>
	A/��eԔ���B�bB<����~���K٠�5Y��"֮���-Rr/��tp�����+������Fr:ƀ�:8�����2ӌ.�t됊5�LNZ�%?� t��(� Xv��~��:������1�C�WOhPNJi��>u`{��5suٽq��r���Y��$i%t]߰��$=�:G�����;�65�z�W�X��������vS�&��9J��
и���/J�C�L�0��������[���PC�v">
						<i cl�&��I�l-Z\���=exclamation-tria�8�Fjh�#TG�GR�						exclamatio��E5��/!�Li�c>S	</div>
					<d�TD�]��L�z���
X���nr�bo4_Mꗽ�HIe��_-?ߥi\�Z�u��R�OǨA,Mt.�S`Q�i�e"ux��֦!?\C��_�n���!�L			</div>
					��mA|ʕ<PHtc�>n�~�^H�B��@q�r4Q>�ֿR�[|O�7Nȍ��D�v�4�P~V/�s�FC�5�r=��?�
						externalR�X9�m
�@�zI��l� J�m�|���R���#�!����T�^Div">
						<i �4k�pQ�����S��|���g��㭣ȝ/A4<LD?�`{�P�Q%�l�7�V�<�3���%2iv class="iconDi+���u�rY�a~���ass="icon fa fa-eye-slash"></i><br>
						eye-slash
					</div{��n8	���W
s�7�ݱHK�(w�if-P�V��i�o�t]eu8(&�con fa fa-eyedro�����onIf����~Y						eyedropper
					</div>
	�� �B�@�ާiconDiv">
						<i class="icon �:h��u���Ȯ`�鼱!�O.)�WM�ϙ5�ыzkVz1�1v���3����p�"]Vv�onDiv">
						<i class="icon fa ;�R�wl۸U���'Ο�lA���F/0L&Ò��	f���ߔ�%|`d�\�������A lI��ѵ��7�A�ƍ�~�E�	.�W�}\M���I��l������D^U�<+����S�	�C��iӹ�嬮�\�U��/���5!r2�
|�t				female
				�3��Ţ�J}���vC�s*�𨥊�2�����gn��ˈ�;AV'�K��yv����?�.Nfighter-jet"></i&��q�0�n��Ё{�{���ˤ1�?�$A�{s9&1�$���9[2��o&3|v;S�F��wn���>
						<i clasߠ��&����&��|�le-archive-o"></��?�s�>�I����Mle-archive-o
		��_�����U�;͞�X<div class="icon��"�;~�1�9KY:��2��DaM(��,�ka-file-audio-o"> i��M4xc�#����/��S\U��ȸ�� Z��			</div>
					<div class="iconW`�h�����˧�class="icon fa fa-file-code-o"><�s��cK'��5B����!^������{4c�{��Q�X~ɩ�|��yD"j�����	|��{�̴PH`͆��}��
D_�mS�$� f�άq&C1��file-excel-o"></�GM����
J��le-excel-o
				����#������-�env�]� �p	lh������E��/�Xr��^�['�{B�^�pلI�hpua���z����{�L��į]YS���(ۇ��<��.��;�WP�mA����K���ZM��k}�d�߉X�Vl�=���W �A1qH�~�j�@E�X�T��a�� C�Z7P�����
Op3���~+�� �z�B8�l�6Hͦ�eh�dgy�"b�Ɍ2�����#MuT�=��p�}Do��:v\v�W���m�{_f|7.@.I�rĊ�{!Jm0{�x?A			<i class="icon fa fa-file-pdf�GH����V��
���B�kB��	N��R�Ǵs�������1�9"�=����W�}������؂�����S����	l_�6@l+�a�K�.����7�ѕ@����x���m��HbJ���L�v8�2-K�]��/���;��-����30�}0욭S_�|���+�j�Q	��x#70~S���}{���l�K@8�lass="iconDiv">�^\(rIb��ޒ3�{��,��"��7M��ٻ\�� f����<�<��e%�fY��p�1�������<p��Ь�Lgm��GU������6����H(��
�̥�Ѹ�����G�Q.��riOO�oz�2Uo�T���$�������X��			<i class="ico���/.rY���D����5��OcO�ГF̪��/�����CZ�BV1C�8�R��ˊin�@�ԥ�`⩛٪�/N��c@T��9��Y�~q�2C�I�����k���Uh�''�,N�@��f�G��9��
��r���p2H�^�����8��C��*��/L������(Gx�!+����Z�N�oZ�r^-�e����r�k	f�ku�������v쿖ϡ� a�T�/FwwUF Q��r�n�"���6>�c�RA��q���F?h�@���FC��ideo-o"></i><br>
						file-video-o
					</divPǖ����0�.ߵW7�cc�_%�
�P�t�b�z���:������`�(con fa fa-file-w���3��&-�Xf��G|�Fn��q;�Z����)F���W&��HX������lj	��x��=u�?�2����3}QZ���7����^�(��n fa fa-file-zip9�`�����ڝ@��-�C^Z�HG
���a����//)>�����-muted">(alias)<#@JnP�N3�ɇ�.�< ��+����ؓ�X�#����!�^�fj��_R&hGA��z5\|���O1��*8������#�mM/F�w��MlY�[�		film
					</div>
					<div c>ɖ�[�q�ƙYx�RӉ�Df�	@�3������A�'#�֍�2桎er"></i><br>
		�H��75:������0�{�U�¿r^���!hD�E��KI�U򆦒�������?���~�;v(fF���̖n~
K���	�OB�T�n�&�0��<Qz�s>�Ki7	</div>
					<d�:ߦk�hU��ľ�U/��]l	���4^�b�(����,G�����cc,e(X�	�L�0�*��X����}MQ�-���T	/�nПQ׊�Fqe���)-iZ~c3X���L�:���A����3v�P����&��)� ����^����$OV�d�8�n���Z��p�� ; _�>��J �]Q�Ƨs��������	�݆7��W���-�շss="iconDiv">
	��%-׊Oj��2�J#(]���vJ��FQe��`i�;#�ܕ��<"Sjb&Ơ�㍞�aʽ���vi${�[T�L�$\���^0�������g?t class="iconDiv">
						<i clasӦ0U�rƠYuP�ag-o"></i><br>
~u��xp)�!�p�C����
�*+�e7���"wB�i$�)h��N���\zDiv">
						<i class="icon fa f(�ۦ�T$	��;^xut|Ll���f�q�N듣span class="text-muted">(alias)<�o�e�$��#��v��l3��f[�����L�lass="iconDiv">
						<i class=m:A���ks���\�R�*�}ߢ6�Ǒ�����6��c{�D��M��uY����ځG�������xHN�2��M�#���J�
���� �ωw�rM�Ԫ�`�poɷ��+��.����f���V	������A			</div>
					e������#X���&��D�d8���˧nn/���!��<2��B  !',��Ć��)c+�<br>
						fold��"�n�՘���Y�G>
					<div cla��8];�Ax�����O�Fku�����cN���>1"��������4�w�"����o�Z��9�B8��+� ��Ew@��J6�ɞן���Ab��ng}D�V'?����� |�Z'��ؙ\�7�87!�			<i class="icon fa fa-folder-o2)�E�:��YĮ�e�Ĳ�J��s��0�c��@J�t��6⩚�L	R�w�>
					<div class="iconDiv">
	ϓ�8��Y7�ae�ɭ^���ڕ������o"></i><br>
			#�ä��ۑl�쇠�Oze/��0�/��q0u���!(P���������r	E��*�i����"ʔٕ� 9*Go]qq@.�futbol-o"></i><br>
						futbol��I�^F���xq�%����2��6;��N��)�v(�xt������0�-IY	��to�_�؟�@{ l`yӕ></i><br>
						gamepad
					</div>
					<divj;۹�Ǻ�6���=>
						<i clas�y�$���@���!��5�S�l��\�g�mG��L�I��į^Ǥ�	</div>
					<d�5������-l���������^�L�I�7ass="icon fa fa-"���S��>���A��~��@ >�j�TwvHVF&�6��+r{h�����8_�an򇾧�B����C�M�:2���P l9����@�-���N�+�aO�E�--����D��� ��młA�@�0.�7�W�8n��O	�� ȫ��U��'��e�/ׁ�.hVښe�I�^�����&V+-i��qfA�����\�;`����			</div>
					<div class="icon�g{�6��eq�c!�ۇ@r%�G����-l�ˋa-gift"></i><br>ށǧOi��-v��T1			</div>
					<div class="iconŦ;&�]4���`C��ؠ��d@��`�����a-glass"></i><brTC�ק�Q������					</div>
					<div class="ic6mF12x@:�:w���4�i class="icon fa"�������G� ��	>�=,yn�����;�LǠ)a`���E-���#U�I�[�lÛiconDiv">
					��`��$�ΏK�'3ٞ]�83�š|]��%x�k@���:-�� y�>����>�4́�og�;3�e��F8�H�ɯ�لE�>
					<div cla[�G������B���('#��wA���&{I��-;zOW%�����></i><br>
						group <span clasIa�n�L���k�[ɳ���B5vPw���Dd8 					</div>
			�իu�B�1����]�����d`�-���51�)s4i class="icon fa{Ԫ|���;�`r7˗4�p���yu�!p�2z^6��;�������0b��Gƹ_91�9i)	
�I�	���6���ag��~K��t_�>
					<div cla�xµ�N�+�x�z					<i class="i��a�:!qڑ����&�Ms�`&����-��f2�kG��p�2lszard-o
					</div>
					<div c!�S�
�e��B<��Y��ȿ�	�5�"icon fa fa-hand�>O�e�ʐ>�T���"��4#>��LC�aper-o
					</dW����H=*����lass="iconDiv">+5�zǤ0P��i1��"icon fa fa-hand�"�i�9��U`�hr>
						hand-p�3O�d$x>؉�`=�/-�br����U���|�f	���K������ܦTi�V"���wݸ�O"icon fa fa-hand-pointer-o"></i>��G�?���3�M��?u� ��Tg�܂y@O�� 8�n=�\C/d*G}M5��ߧ��G������������&��r��p��m&jG�A7&�B
S�����{��P5b�M%Nå�9������&��	1�$7e�F=��n;- �":��Y���25F:�ȃ?Z�z �Z��Q�Wi-r��Z!h3���O}���AC���@����ޗ�mC�N[�/i><br>
						h_�ltW0zf���(j���ʀ�[�<-Ġ�u�Q��u��F񿫃�G9��fLZ\�ô�y���)�ehxr�v��D�����4o fa-hand-spock-o"></i><br>
				ʁ��Yt����<3��OP��/�V��ЦdO�$)		<div class="ic���^�X��:�n�xٹ�Wwd ���&�FQW��*)���0~��></i><br>
					���A�Q����eBv�f ࣃ�����zH?�Y�*&����*W�pan>
					</div�fY��� �@�,��",��TȖ����ZHFx ��B����con fa fa-handsh��ἆ2s��1�E����Ϙ��'� ��B-o
					</div>Q5Lo\`k���կO2c_��	��C���Q����m�f��,P�)?\�Snp^�F��=/��a4ʦb&uΐ���\Kv;	���0Pf��[��LJ	�v�K�X.Ur=Y��Ylass="text-muted@������ G�җ;�qr9�3W����y�n				<div class="}�.=�^�p�`�`ٔXES�SG�5G#�#��_g��H�d{������/i><br>
						h�D���B?<R�IoV#��V���'����Q6!��í�(Z⸇�߄NK��
						<i class="icon fa fa-hdd-o"></i><br>
			L~8
&Ӕ�(�z@��Lb��@���_��C�[�X�����&A�/7�4ۀ��A;����Er쏛��-�O��&!�$��˺��jW������^$��S�uwL���O拏�Ƭ�ֽ(���>
					<div claԵ���D�Ω[�sV�A~					<i class="i`Uj(�ڮuѱ�;Ɨ�N5'��dQ�|I[/B��:�7��n,f��TZ�`h�b/��U�����><�����`=l�;:��W(M�����g;y�}�b���mi/�.c9�eS��y�O��{�5�JT����|Qg��e�\Ζ�Ȱމ�����E��}�J$�h[I�)��m�1c�e�T�8�铵�+J��S+��6ͯ�O�Z�EF�^a-heartbeat"></i�6n2C��x	>_��Q���W/!�OS�"�1���iv>
					<div c����f��X�K�EF
						<i class=E��@�_ޢ�7N���\{[g�RB��K��[�5G:�y���J>��o			</div>
					�6'�X��	#����DDiv">
						<i class="icon fa fa-home"></i><br>���Z�	���s���)shp��ݬ�m!��'P^�q��sgCDiv">
						<i class="icon fa f�J�I��w?/c�x���%�\��Դ�3�span class="text-muted">(alias)<�$����K�ȣ�2����lxU�>�w�h.:�6�i�s������۔T�61%�P���ԇeA�_�pN�2�O�J.|*�a���}���*��3K3���}2�d
					</div>
	��0W�!�;?Rx06iconDiv">
					_� �VT���P����
fa fa-hourglass-ۨ����E���RB��r�������I���d�.���G���Ƌb\�e�}��&��f.[��:ꜷ�Ƅ�h��ɒ٠�iv>
					<div c΂��T����}E�2
						<i class=���ݧ�>D��Z����Q�]:T�7)�y�wΚ"�"ʟM���ل����QE����m*,Փ="text-muted">(a��c0�ɬ#�3;99M=			</div>
					�B��϶�g�c?�,E$�Ü��x
7�.`#Hk��/\����p@	�r��>c�HPI���3ia�Nx&�������6]�xourglass-3 <spanh����[�3-�W�+����p�~$�<�gn�Q�׋%�AW��l\0��%&!�
					<div classtnkUj/HK+Y'e�����k��|�V�����H�[n fa fa-hourglass-end"></i><br>��FR�6O����_?q���-��J&� >�Pɸj���Ra�Լ8әz��ss="iconDiv">
	_R/>M�����ÿ�Lcon fa fa-hourgl!�A=�����jU1
Dg��SJ�G9��k�[Kca��̨��p��	-�-��Ǻ����r$~2�\F���Q|�-�K�~z!(��J3�/7��-�V��pH�� �5�cv�urglass-o"></i><�o kN��[%�Q\��dlass-o
					</dtfS)�n��ԈO$E�J����˅��')�*Qخ�0��H��H�5&���=nk��yܱ���1{z�� ��1�-E��><br>
						houP�.��8���f�S���բ�;n�#���o���v��d$��D���ODiv">
						<i &/��1�{K}����#;�a-i-cursor"></i><br>
						i-cursor
					</div�+�P%Z����.�隍��\�̭
*U�E�M�BA�|�tr���yqC�iK�k�c����> �3T��"�r�ۗ��@T��#��D�Yi�2zӣFh5����#�J�$����?�
���vї U|��Qw�l� �@���CE�d�,H��
�V��^H���9�m�_�B)�br>
						id-card
					</div>��fkЉBF��/="iconDiv">
			Ӳ��x �q��Rn�,ɪ(G��`�ʈ5zьf���Η�����			id-card-o
		��I�I0�`k	�ޣ��d:'����q��Div">
						<i �R�n��TC`��	�b<і�k�dm�������.�|�%~����L����/ޗ�t��v9�HeU�<�)���˔ ��Y�B�\X]S�X��r|��/hS ��lass="iconDiv">U,�D�"�H�Q[��D"icon fa fa-inbox"></i><br>
			\��@
t���b��ŷ/div>
					<div(z��pt�w/#�k�m��[��I�!�i�Ys="icon fa fa-inط��ȧ�	u�zE�~
						industry
					</div>
					<div class="~��r�
34�<�P罙a��%��*n@���K�k��9�0�1O&�-�
�t�q��oM?��.��!?r��IA��]9<?�#zC��5��[I�<iconDiv">
					��9ww��3��H��fa fa-info-circl�۰X����\e���žx24�����n���`t�n�_�Lb4��*z�-�-]ߐ���Uǚ�@ɋ�>�q�L�S��e�)�3����B�~�G�RT��q>�ŕ[s�Y�7�S`���վ�\�\~��A�U~�tR��g+����<|�b�r��5J�q��E���`uted">(alias)</sf�.�ci��l����(�`K��5���/�.��X�ss="iconDiv">
						<i class="iw���'4+�)d���j�	�k="�`̩Rnc\��H���T>5EȌ�K��E��ٔ�q�����`<�=���^!��S�c����i�G�a�!wc�q��308�
��-r��ƪ�Ӈ				keyboard-o
F��9oELc�e�R���6_�+G�l��)(���6��o� z��k��R����ۅ�u�}̅��Ҡ��5���b}z���.-�@�'g��ΧF���	0�ٍ��9*�߰4=��z|� %J����Ȑv�a��w�Eg���1d�<�O��ݿD�૾8A�AL<�=�7
\�w|rQ���op"></i><br>
						laptop
				��{7M�6l����:iv class="iconDi�t��&�l�#�䋈�t�ass="icon fa fa-���{7 +q��%V�Sw6�=���u�~Nqb������i3�������`�O����W�o����Y?�����f�S��.�h�r��~���OHJlegal"></i><br>Ǿ�:V�dJ��h�?Han class="text-mZض��Z"�+BE1����c�Aa�""���#�Z�U{E��{��O��ܺ�n�\��������Pfw.�0�i5�8���con fa fa-lemon-o"></i><br>
			Y)Yt���5ՙWm
5v���4ڪ [b�8Kiv class="iconDiv">
						<i class="icon fa fa-level-down"></i>�ŭ|���#���J�F���_�.��7�Bniv>
					<div class="iconDiv">
						<i class=x�T\ꏹ�P�oo�
.��:Y�"��~@/�						level-up
=j�~�+��<>l��]倐K7��+�Ii�բF�0K�@�!L�u3?J�dO�ŀDZ��H�����y�Bf�#���<'�R_�玁�����06%�Ǟ��3mw�J�lass="text-muted����B;��w�1��>��~헩t��*B@				<div class="Bӎ�c�V�4f��%�z⦉'��>��1cfa fa-life-buoy"��}9'���^@"����������Gd�Rw�� class="text-mutޚ'}���w�b��Ter��+"eZů�u���Q�	b�1�o�"�="iconDiv">
						<i class="icon fa fa-life-ring"></i><br>
						life-ring
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-life-saver"></i><br>
						life-saver <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-lightbulb-o"></i><br>
						lightbulb-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-line-chart"></i><br>
						line-chart
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-location-arrow"></i><br>
						location-arrow
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-lock"></i><br>
						lock
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-low-vision"></i><br>
						low-vision
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-magic"></i><br>
						magic
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-magnet"></i><br>
						magnet
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-mail-forward"></i><br>
						mail-forward <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-mail-reply"></i><br>
						mail-reply <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-mail-reply-all"></i><br>
						mail-reply-all <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-male"></i><br>
						male
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-map"></i><br>
						map
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-map-marker"></i><br>
						map-marker
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-map-o"></i><br>
						map-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-map-pin"></i><br>
						map-pin
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-map-signs"></i><br>
						map-signs
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-meh-o"></i><br>
						meh-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-microchip"></i><br>
						microchip
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-microphone"></i><br>
						microphone
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-microphone-slash"></i><br>
						microphone-slash
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-minus"></i><br>
						minus
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-minus-circle"></i><br>
						minus-circle
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-minus-square"></i><br>
						minus-square
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-minus-square-o"></i><br>
						minus-square-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-mobile"></i><br>
						mobile
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-mobile-phone"></i><br>
						mobile-phone <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-money"></i><br>
						money
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-moon-o"></i><br>
						moon-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-mortar-board"></i><br>
						mortar-board <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-motorcycle"></i><br>
						motorcycle
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-mouse-pointer"></i><br>
						mouse-pointer
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-music"></i><br>
						music
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-navicon"></i><br>
						navicon <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-newspaper-o"></i><br>
						newspaper-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-object-group"></i><br>
						object-group
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-object-ungroup"></i><br>
						object-ungroup
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-paint-brush"></i><br>
						paint-brush
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-paper-plane"></i><br>
						paper-plane
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-paper-plane-o"></i><br>
						paper-plane-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-paw"></i><br>
						paw
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-pencil"></i><br>
						pencil
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-pencil-square"></i><br>
						pencil-square
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-pencil-square-o"></i><br>
						pencil-square-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-percent"></i><br>
						percent
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-phone"></i><br>
						phone
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-phone-square"></i><br>
						phone-square
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-photo"></i><br>
						photo <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-picture-o"></i><br>
						picture-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-pie-chart"></i><br>
						pie-chart
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-plane"></i><br>
						plane
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-plug"></i><br>
						plug
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-plus"></i><br>
						plus
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-plus-circle"></i><br>
						plus-circle
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-plus-square"></i><br>
						plus-square
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-plus-square-o"></i><br>
						plus-square-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-podcast"></i><br>
						podcast
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-power-off"></i><br>
						power-off
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-print"></i><br>
						print
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-puzzle-piece"></i><br>
						puzzle-piece
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-qrcode"></i><br>
						qrcode
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-question"></i><br>
						question
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-question-circle"></i><br>
						question-circle
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-question-circle-o"></i><br>
						question-circle-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-quote-left"></i><br>
						quote-left
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-quote-right"></i><br>
						quote-right
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-random"></i><br>
						random
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-recycle"></i><br>
						recycle
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-refresh"></i><br>
						refresh
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-registered"></i><br>
						registered
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-remove"></i><br>
						remove <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-reorder"></i><br>
						reorder <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-reply"></i><br>
						reply
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-reply-all"></i><br>
						reply-all
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-retweet"></i><br>
						retweet
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-road"></i><br>
						road
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-rocket"></i><br>
						rocket
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-rss"></i><br>
						rss
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-rss-square"></i><br>
						rss-square
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-s15"></i><br>
						s15 <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-search"></i><br>
						search
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-search-minus"></i><br>
						search-minus
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-search-plus"></i><br>
						search-plus
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-send"></i><br>
						send <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-send-o"></i><br>
						send-o <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-server"></i><br>
						server
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-share"></i><br>
						share
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-share-alt"></i><br>
						share-alt
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-share-alt-square"></i><br>
						share-alt-square
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-share-square"></i><br>
						share-square
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-share-square-o"></i><br>
						share-square-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-shield"></i><br>
						shield
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-ship"></i><br>
						ship
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-shopping-bag"></i><br>
						shopping-bag
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-shopping-basket"></i><br>
						shopping-basket
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-shopping-cart"></i><br>
						shopping-cart
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-shower"></i><br>
						shower
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sign-in"></i><br>
						sign-in
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sign-language"></i><br>
						sign-language
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sign-out"></i><br>
						sign-out
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-signal"></i><br>
						signal
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-signing"></i><br>
						signing <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sitemap"></i><br>
						sitemap
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sliders"></i><br>
						sliders
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-smile-o"></i><br>
						smile-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-snowflake-o"></i><br>
						snowflake-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-soccer-ball-o"></i><br>
						soccer-ball-o <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort"></i><br>
						sort
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-alpha-asc"></i><br>
						sort-alpha-asc
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-alpha-desc"></i><br>
						sort-alpha-desc
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-amount-asc"></i><br>
						sort-amount-asc
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-amount-desc"></i><br>
						sort-amount-desc
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-asc"></i><br>
						sort-asc
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-desc"></i><br>
						sort-desc
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-down"></i><br>
						sort-down <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-numeric-asc"></i><br>
						sort-numeric-asc
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-numeric-desc"></i><br>
						sort-numeric-desc
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sort-up"></i><br>
						sort-up <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-space-shuttle"></i><br>
						space-shuttle
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-spinner"></i><br>
						spinner
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-spoon"></i><br>
						spoon
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-square"></i><br>
						square
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-square-o"></i><br>
						square-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-star"></i><br>
						star
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-star-half"></i><br>
						star-half
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-star-half-empty"></i><br>
						star-half-empty <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-star-half-full"></i><br>
						star-half-full <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-star-half-o"></i><br>
						star-half-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-star-o"></i><br>
						star-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sticky-note"></i><br>
						sticky-note
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sticky-note-o"></i><br>
						sticky-note-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-street-view"></i><br>
						street-view
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-suitcase"></i><br>
						suitcase
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-sun-o"></i><br>
						sun-o
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-support"></i><br>
						support <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-tablet"></i><br>
						tablet
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-tachometer"></i><br>
						tachometer
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-tag"></i><br>
						tag
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-tags"></i><br>
						tags
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-tasks"></i><br>
						tasks
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-taxi"></i><br>
						taxi
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-television"></i><br>
						television
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-terminal"></i><br>
						terminal
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer"></i><br>
						thermometer <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-0"></i><br>
						thermometer-0 <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-1"></i><br>
						thermometer-1 <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-2"></i><br>
						thermometer-2 <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-3"></i><br>
						thermometer-3 <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-4"></i><br>
						thermometer-4 <span class="text-muted">(alias)</span>
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-empty"></i><br>
						thermometer-empty
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-full"></i><br>
						thermometer-full
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-half"></i><br>
						thermometer-half
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-quarter"></i><br>
						thermometer-quarter
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thermometer-three-quarters"></i><br>
						thermometer-three-quarters
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thumb-tack"></i><br>
						thumb-tack
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thumbs-down"></i><br>
						thumbs-down
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thumbs-o-down"></i><br>
						thumbs-o-down
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thumbs-o-up"></i><br>
						thumbs-o-up
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-thumbs-up"></i><br>
						thumbs-up
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-ticket"></i><br>
						ticket
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-times"></i><br>
						times
					</div>
					<div class="iconDiv">
						<i class="icon fa fa-times-circle"></i><br>
						times-circle
					</div>
					�/@�Θ2Lr��!�Div">
						<i 8�D�'3v���ح��y�$��.(��|X�T("></i><br>
				A>t�&�3(�V�a2�����:&�L�Q!��]�[k��#xF�C�`����iconDiv">
					Y����f�
��v�^9b�=��e�Q-��U\���O�jT u���
�
						times-rec�V�R�j�UЧo$Z��ss="text-muted">��p=��Xz��	x�����E��oQ���Qq�k		<div class="ic�o���q�^	�,vϺ�
jǪ&.��j�mp��ޛ fa-times-rectan��f�@�Sϋ�Ũ
						times-recC��%xM@J�9��Ҷ,D�F���`e��0�">(alias)</span>�N����$��8�9W�W�U�-���m�"6ŕ	<iconDiv">
						<i class="icon �eP�	���3#��A�O;wL�&6���qX�%O�u/���Uz�n߄�mP�����[���~�Vm_�����- &n�4m�	<i class="icon �K�*�G�03�/��uUn"></i><br>
			o���GQ�tk�����f���Y�q��*�.<�^������t#�ـt�G/span>
					</d
�d��l*��Q�	ES>��d.��[D�<�B���t��P��vv��ߓz?^����a�Ɛ=�#{�IM�H�:h�ǝ��h�/MA(h2@�I^��ޙYቂ����`	U�Tlv���G ���Ilias)</span>
					</div>
					�ń��cU3��}�6EPl���׏�^��'��F~�5�۷.BZtb�#��.�
��t,op����S��l�X1��LoDM���r�EO����<�&K-��^P#]fd�I3T:��	�YG�CKi�qȋ�?t�/���끪)����l�<��%@�y����2�A3d�>
						toggle-J=�����R)�� <�
					<div classޣR!@ڞT��"OEZA6�*���.�՝L�2n fa fa-toggle-r|����������						toggle-right <span class="������B	Ij�%�(p�]�{Rƅ�NG�1����� !ڃ��đ[L��A���c��P3-%�v">
						<i class="icon fa fa-��t��iV\[�/dO�@��kq�����u�l�9He-up <span class="text-muted">(a��(0��]�tZ��Z�9ƿB���D�9�����v��rgh)NI�/���&��?�:�������Űz�class="icon fa f��j�g[{;>W��({�"YH���"SW��a�tΊy�I 1�,�Ʈ��iv>
					<div cr�%�2c�&�N{_{�?qשr���l"*�"icon fa fa-trasP�߲TɄ�>����-@��� ~(��Խ�;�BV��j�4u���UE��fmU�{���Z}#`��w�x�q��R�ۥ_���M�'v��	�7�3�2ash-o"></i><br>�0�8����r?��.��G'��V�@�$���e�		<div class="ic��*싕��Nx��n�	����ǎ�8��R�ĕǝ9d@gT~�ؔZN���k������*s�%�.2�Cw�B� �V���Ze;����9)g�d��6#m�x��S����P`՚�
�,�����k��{� fa-trophy"></i><br>
						tropjS�d�>��̰U(��{��ٰE9�O�E����_|sՇ�9��R|U��o�c@�;a�d�jM�ۅ� ti5x�k�.FŘ�wg<r٪���n.E鎈w�� ��M8��4��>8 U}�Cj�HQڷ�X���u�2b+[}-					<i class="ir`�<�[&�jw���q�%G�-��a�o^\n,��7P�VZ9��)u����-�=xչ��eP�="iconDiv">
			=��Qx��ءĊǋ�}n fa fa-tv"></i><br>
						tv <����m��R����q�p�m����xZLn�1��h/span>
					</d�I���?�@����]v|�6e� sQF%��ؚ
						<i class= �;�C�
��wO'S�G#>�Xu&��n��Z��c��V>�Q�1M�w��҄�7�I��!c�8��A�6�'�}�h*�
�e��ļ��$���/9 �0�a\�&����E�9��P�b fa-universal-ac䗑�t' �+�����2]��I$����h�7�_�2�V7x��\�ہ�+iv>
					<div class="iconDiv">�2D\L(A��v)�	�b?�����uf40�:�x������Ah@s|����/����,���'��k�,�~�O"i�
					<div classM_��]�ܖ��V/			<i class="icou�}<ۚ����i$�3</i><br>
						G��K��hyKR��䫀�A�>�<��[e�_A"Hlass="iconDiv">�g��3&����<�as񽭳����ޮ����</����A��Ei������nU�zڊ���]��n�}���=p\���/��ڒ�Iv="iconDiv">
			t�����g�{�r&��.F�S[j�ը�}��j��Lީ����@;��%�`!������͙]S��[-����-�%	?>���=�;��L��p�I�Y��+�$��ϯ;c�����
					<div classQ��EG��!���			<i class="ico;I�j��_��ʆ]{G�'�ɻS���"_u�^��W̜�P��8��
))��6�j���@���U������YR�>�#G\��ʛ}����Q�n�=�:Z���B�'>��"></i><br>
				�A�p�2�~o�r���	5uiZ$bv�X��3�/t"B K�Ҳ��3�P��
						<i class=��}?��R��L��6{KȒ�%��<z/,[2_��R�1Zl�����d0:��3A��I7m��#"j/%�ö�"�`���I#�Z���,�4�y����o�
0��o��)7�JjI��5+�z^�*�e7����l�d&����X�L�s�&rcle-o
					</do6ahxVm���nv���CB��ƪ?Z�=�h��
						<i class="icon fa fa-user�zEu�x��=6+"nA��<���1؄��	J*�8,	</div>
					<d�Fb�<r��~/�0������w/o�r���� �C�?���ެj�E�i�{� T�m�:�(�֝br>
						user-plus
					</divg�a��,輽���	y����\�����O��j����	*��r�A"N��l��`I̪�bJ^�#u�ecret"></i><br>7o.]8[/|��<���3��'o7�-���������䢶.v�z��d<7� /_�?��� ��1YC�����?�b��r#����^.M�p�~les"></i><br>
		�S���o����%X%�|�A���T�K�mR�nA��;�;�ۦ̡#��
���7m�°��㘞�C��9�)�����j{z�S C�Њʚ��є��PW*�!7KU�
					</div>
	+���o;=�+m���	��V�!0���M�-�	<i class="icon b��C�kP�ơ��6r[13
>8�`�sa�\� �?,E���-=�[��9text-muted">(ali��}��~����0sc� i5(U"Qc���o�3����sm�)�p�ev">
						<i class="icon fa fa-vcard-o"></i><br" ܟ6�tE���&�(�$\-�$	:SDY�r+�h�����$�ݼ��ڪ>�	�1U:�J��o�&un�����0"�� class="iconDiv"Fյ5%_���1
���4s="icon fa fa-vi�{7k6 [��*�2��A��(J<}Ɉ��`�O*�e^�&�M�e��l@�F}u]��`ӿ���[��s��V7Xh���������O��<t�v&�'�;�����~%�2�B>2�#��[�� �0�ne"></i><br>
		s)�3G��`YA��يڼ'���L�Oy���/div>
					<div class="iconDiv">
						<i clas�aj�)���K|W�l�������C�Z8��!�C���+�%���<̽�q��R8��57r}X��1Qh௰G_c�"��jrlass="iconDiv">���m�.q;ݣ���~"icon fa fa-volu�x�|a#������ ������ L�;}+����jff
					</div>
					<div classIL��z��P1��:4���Knp}C�����ۗ�eq%��bPh5琎�w4�ҝ��a^UR���}Dj�������(��8=�T�E�>ZH	�{��y�`��p�4��(�ywИ��
T	��. �class="icon fa f�[n�D?��(豴�Sm_br>
						warni�t����^����g�o��2 ��H�%��͜�`�Ӑ��ϗ�P�z|���´n�uig��O��"��Ô?A����(��]kr���]��b98���b�iȚ�SPm����y$ @U�B��?�j�V���Q�i%�[��Aq��x2�Y�5pQ���iv>
					<div c?�zPp��ԛ#����y�U��zg�H�(H�ŉU��p���i?5�����9�:4��(�Vbj������^���]�(�H�%�⇄�%W��@���%��i)�ln�Hŏ�k��x���'�pSn�)����Pv">
						<i cl[�ܮܾ�֎$�h�p��L{�E����61�Hnԏ�����zHl�k�f	</div>
					<d��J���m�1���|v">
						<i clM[V+w��p����@���b"��j-7�� ��i><br>
						window-close
				�*��
ˉ�L�� 3b[�ú�X"_1g�$!Kw�bK6�r��H�� �E1�����GS��ي����}p�*2_�0#�</i><br>
						=ś#R�NEm��I������r�I�nxő����tMpͰ�UAKJ��%&�̟N e3Y����+������qG �<�!xص��-�B?�}��Vg��+],�1B�3O�Y	*��					window-maxi��oi�@��L�8}ƐZ�������>o���N��#�-�Љ��Z�OS��5`�+r��U�!�4t�5�$�V������P.�ͮh5�<^����sA�B=���sk'�R��ƖRT�����knzX��Y�����x>�iv class="iconDi�&P���5wmkUS��.NB���nu�J��T2����bϪ`�i�"�:$|�LP
����window-restore
�� �#>"��!a6���܇�U�c�.�konDiv">
						<7��pf�ۼC�u�X9;���Db��-��3�d�I��2��mw��T�̠ʫ�s^o�O��WH�74|��HV�9�W�%@:���o�{Y晻<��l�/X�C�ϰYQ�s��M�C(9�5E��":"��
z��IA�zURn��|8���-ssibility Icons</h3>
					<div ���n��C
�3�P�@��e���KY�[b%!��j
�We�:�V�@��4Q����ۿR�z��e�2
							<i class�F��t',�ik>髈�ы�q�b��ʲW���D�"ʫ!oKl�v8"></i><br>
							american-sign������М7v��^˝$����k�53B��9� ����aW��DhR�����I���	x��1b�1
;y�p��E5�"�H�;7�lK��3�0��)z� �l�is: "�8��<,��v�n		asl-interpreti���9&�K��+M�A�N�*3݁Q�P4^��as)</span>
				�1��{� �+�
�7Ż�KJ.��P�������^���j
ݚ��1�		b��f�6,�Fн���{�'R�=W��\ѝ��e=�w���F�n</i><br>
						�����r8�K�_'ning-systems
		|�!:r�>���V��nX��r�ۧ������F��e�ϐS�^���)�^�w��$tm��a fa-audio-descrpxDZ|7��d���)�p:�ØJ��Li���ĕ�38ä!����X���#�������)��D�(����w  gR�l��F&'j���ʕ\��.Y�E&�u�#�p
G6T����MÈ�<L�-�{<��6�M�P�
�h|@:V|����D��zp��!��C��%i���G�uW$�~��?�/fW88Mڡ��				<i class="icon fa fa-brailleB%DA�Ř�\��[			braille
				�	���27�NZ���e��`�??  P:o%5Div">
							<i class="icon fa ߒFhM��y�(���ћr܏L��O<�MF��29�� 0ஂ~A�D�}8���=�B|<5JfCп������(ĢQ�����`M9�7���nBVfa-deaf"></i><br>
							deaf
						</div>
		b7"J�
��t�^D)���iconDiv">
					�tR>��pVBL[m��S�/�� �G=���hdďU"%���"�a�����o���#�r6�� z%�;���.��ed">(alias)</spa!5K~�Ę�w���Ф�^ �IP�J�Ypss="iconDiv">
							<i class="�ϫ+��3c�O���3OãR�D�[��%��+���Lۦ�w="4���띬i����!���an class="text-muted">(alias)</s�%���y �ژ ��x�2d��M�DJ�^_��$Ф?/l1�q>�G� �\R*�[�����β)��n�]  \���)�Z<Ab��<G���>
							low-vi�Iz���\������7]���~p٨��YD�W����|��0؆��
							<i classƯ��B+`K��yC֑����l)�,U�az�</i><br>
							question-circle�������WYA�a��5�+�>:]\e���X�#b��s�����L{�T-�Iv�d(b��{�
��Z���׹�����3�.D]E\/b�T����=�25n���language
						*�j�\��EB��Z�'�������U��X[���oL���o�
�%�'HԎ�����R��ǞyFC�8����O�?��n��d�7.3�r;!�=N?� ��)�� �Fx�3a�}text-muted">(ali��� e�ˇ֍ͪ�+ 		</div>
						�{C���4=� �����5��((7�=Mj�}Ab�$ class="icon fa ���nQ?��8ra����q���n�Y���				</div>
						<div class="iconDiv">
							�x����=���򼏥gLH�c�������M��(������d���O�
							universaygZ�Ԃ��/��2`n�Q^@���+{^,Š��(-,'m�-NT�A�P^UD���4�c���Q鄕/AE㛵|'��D-volume-control-�u�D���M\��@!Fl���Y�'RH��q��K��!6Ֆ�˒�*��Yd�#�I�'�7��2�		<div class="ic�,�K�?~9�. �<i class="icon fiw8� �ݖ�67��d��
k7?�O��E�H��yK�T�I�n�i�Um�.�J��X�tx�ˠ�z���R9|�k#�`H��tz��v^<i class="icon f��5߬e �G�5�SviR_��!�}k�����e�o�M�-wLF&��5�l+W�{�)���)`?���c�F�p���b��~�
				</section>
				<section id="hand">
					<��b�O��D��E~Peader">Hand Icons</h3>
					<div class="row fontawesome-icon-li���PgD�5o���= class="iconDiv">��H���Ĩ�d"�M�`��%����
���� ��!�ˏg6{$��N�I��8�;��`ݜ�qi��\ndc�ː�v����+u���S�xu�
i����#���U$vM��5o8g						<div classT�&��ȋ���u��(�R��߁|��B\2��9%���t��;���n9p��GN�4�0��
							hand-li�&0�������"ۜ�div>
						<divؽ�w�C]���	���؊ �RQ��~,��y�D�a84@B]$�Ɣand-o-down"></i><br>
							hand-o-down
						ʄU���ً��?��iiv class="iconDipK��\)�DW�$�?lass="icon fa fa-hand-o-left"></$�*<6c�x
'�8���m�H����(�N�N.�/��.��t�G,"�~<div class="icon���}��_0�?1~�p�}����W�ض�PT\�дl� �3��	></i><br>
					
��ԫx[	���%,�����R��k%�,�;7��_{��x�+J�n�
��iconDiv">
							<i class="icon��T������v,��
s�zk�&|�������bx��wR��]��z�				</div>
				����,�U7f�ܭ\C��7��kl<�B͑�&��,,���2vD���K}B��0�r�K��!F6OD&�*e�~�!V��-d+�''G���bY�=�5ѫk�����|���__�>�����çH�/��իb໺7Ve��?̿���@?Z�d��on fa fa-hand-pe��my�e!�EY	���_��Z\v�|y��8�Ãge�)����]�e_�/�CV�'�f�R����T��ýPA)�ĸ�D�58�t�ݸ���*����3�(�V�l��y� ޔo���:��4SXك_�M%~j�ݧnd-pointer-o
		����=Χ�sv5Z.��g3�ys��q/�優,l�L�oj�"טL��Eg�w�k��Xl��JsB�����~���J!�gۇ��!�	��2� cm�N�Y��M�<�n�ca��Dh�  Ԍg���������l:N�����p3��4��N��H��{����PU�?"ϥ�a��-5
3���4�}_e�CI<W��*e�y�sur4}O*��r!��aB+�����W
r����h�m%�e̓3�����2�?�y 6v��s���v">
							<i cPKY�CsF���aW=eC�����#p��jg?�s��-l/����ZD���u�R��i��J��R�				</div>
				���h��7�%XI�3����b���O)����S��<i class="icon fa fa-hand-stop-o��7�ٞ��6L~��}K�dF@���菕6�t�*���`Bc��&�Ӥ�S� ���!�-�����څ�n���D��yL%���'Ď��-��h#�$B�V�G����[c@{������ o�%�O��ss="icon fa fa-t}c���J�Ջa�%B<br>
							thu��t+-�2�0	�3Y�Z���J�!`��dN�|��o�iv class="iconDiv">
							<i c j����p%W¥�����*'�j���nH|��\��ӛ�5t����d���J���`�oD��						</div>
		��[�b�.�]��d��bIp��l� o1��_�	���&��M�{x3�|[v�fp;��|,�.�W&Y%��/Y��>�g					thumbs-o-up��tf�� �{Y�;���H��10+?�����@Fc6�~��sw�9*/�d�l(
���Qz,��5on fa fa-thumbs-up"></i><br>
		�'ǯ�p=��P�e�Ä��2Dc���Ѯ�y�=���W�ay:!c]V��d�"�k�O��n
=ݫ�����1gM*��2�H��4�ҿ�v/^-��			<h3 class="page-header">TransW����V�O��֓�lՁ�G1��Z5�$�ƭr6��
v0�z�6�@��%�1�s�e��-��JvC$x�$Q����f
a�blass="iconDiv">
							<i class+lG����~�#������౒/�o�+��-/�?�.[�D�<�����n�I5�<��`v���$�[l+�������Rpg�y�kFFYl�~nBl�H��w +�$<��9�i�6?r�Uf~��^D�D����]&?��.�fUZ.�3�м������
��*=��1�I(n��[�ԝ@��ʚ+{6���_@U��5�)@�b		</div>
						h�ҳ�H��b{�����#��Y��?�)�N��4 class="icon fa fa-bicycle"></i>z�c����O��Չ3d?�ycle
						</div>
						<div c�(|�$?Z8���Bd�?jq�sIe_���s������!f���B�;f"W����b�{hF,��Xdq8����LZY��㢌	�4[GRK3hx�-�dy"iA�����p�8~Hy.�a\�` �:Bb0�?�n|ي8U8�5��������K�[V~�`˳�M������q�d������R�J�	Xpu|��RhGM�/
						</div>
d����0 n�e��|~�q���8ֿ�2���Y���&)����� �E�Hs��s��q���ɛ#f��R��L�A��z)�̈́����P��%�s>�b���9��j�ݮ:#m\��<^��z���/�U'���ȕ�n��/07����������AqӸԿ)O�=M��r�|j2��^gg�C-jet
						</di�6����6k���|f�.ۇ�B��2�[_��*����A/j]:�W��;�_����Zԅ����orcycle"></i><br�͞��ĝo��8��"��FgYuas�;��|T��j�� Y� an����䦹{Ɣn��#��y-��e��R�?;/��@��$S9�����b���ne"></i><br>
		ʢ��WlF`��%|L�		</div>
						�_��6��|�
]���U�5�,Ay��xʾ�&e���w ��G�U�9�Ӏ`�apk篈p�U4�Abr>
							rock��F���L AA�m�r~
						<div class="iconDiv">
	�I�����1��|-��b;Ѐ"�h]c1��ү�:�[$����B�@�\�3L ��쳔�[Y=Ԫ%�Sg" �e��	U����'���Q��hA-H��~��~����x1�W'3F��U��"=�pace-shuttle"></i><br>
							space-shuttle
		*�^�L��~`�����I��2D��SK�e]����H�ؚ7�1{F�d.��&]��(?�Q���1p%o�l,�t�l��:`�Q9g"�썐����w�?Y�tx��y܏�c�)��LW�n�9�k���{��i���*��&���2YUϩ��E9���$�X�xbp�,�-��i"></i><br>
							taxi
						\����*�F�+#}DYc�7���c��y�����r�@�8����:[lass="icon fa fa-train"></i><br>�=�L�*e�K?���						</div>
		"��y�g(9 �ɻ��^�e�$9,l�@aQ�		<i class="icon�P2��2�Ń$4h�4��'.����b���n��v��L�l,I�'�w�s����6$��q���l��QY���
							<i class�)q+�M�W�:���.elchair"></i><br�\ê�x�9w�X��b��$�-�H4ˏB2.�7to��s/�� �%���!ʱlass="iconDiv">
							<i class���9��R�������M|�f���J6H���N><br>
							wheelchair-alt
		�` jD�=/�����4�����M����z����E^�P�z��j��� ��PD�`$w|?/Tʙ1�w]�.ۨs�J�S�P�q��
`N�wL>V�ś���w�Ϻ����F3>
					<div cl�&8BV��	�+�Xq5r]ޱ&�dW�{�5A���j�8��Ĺ5>5��Vk�;�z����)l�� � �c���Bl&,��c���XG�+���D�rless"></i><br>
							genderleʺC��R�ۨ�K��m#p���˥|Zp
�l��VBuP�΢�`�D�						<i class="�S��I�e8K։�Ͷ�j�D���mԔ���C6�Y��	 ��7���'&��%H�p@p�8 O��|��ۙ�.[��m�$:U���u�����S3QBI'f=nj�ٜ��w�ud�䚌��#N�=u��w��@��8��m�C��+wD�rŇTfars"></i><br>
	X����p����fqJ�d���K@̭��R՜_f<div class="icon���k�ΒD�]�8̍3�p��ѝ��s��.(%�fa-mars-double"></i><br>
						kˀ�ܴ$h�>�-A���s5�������O�gf�9��]������E�onDiv">
							<i class="icon fa fa-mars-stroke(�����>�<a`W 1��9����� 7�:						</div>
		�B��)�mݓa����7/�3��
�v		<i class="iconi��`��OsgN�x��.)�@~w@ك+
�棔~0��w�!���X-X��TN�5��
D*��L��e�u���B������/�m5�P�1�)B�bon��þF���.S�U-��W���_
A�Qb��g���O	�;F��MD��5�Q��l�*6L�%�\oPpڜ���d��jQ]�4�F�-a��t��P9���g`���H�F�Div">
							<iI����۠���x�`��`+	G���b,eً�<br>
							mer1@�k_N\+�ӌ49v>
						<div class="iconDiv">�f7j
^׏�ǋ����="icon fa fa-neu1��XY��a	9�ٔhv�4�BX���$Q�5?�P�W������.Fh�o��	��F#t�!�GonDiv">
							<i class="icon f���ID�6�^�������\�qR�:[�5��`-x�V��<��}�K��Ɲ�E&�	���! ��N�m�:p�z`!�(ʢr��������������	�>0�p�V��Ύ�Ł�\>UG��qK�b�k�r�;n�(���Y�
							transge���X)������B��,0���J|�BEP�Kiv class="iconDi��)�1H�]�h�&K�lass="icon fa fa-venus"></i><br>
							venus
9�M4��)q+a�g�u_3�ႝ� K�Y�`hz]�7SC���[th�Bd���	"c4"�ʍ_EQ�+����MY�s]~V�%/~&����Z�[���T�,�y�↸8ŏ��7��JER���[z� ��V0�	^ہy��	!��ߍ��						<i class="icon fa fa-venus-mars"></i><br>
							venus-mars
						</div>
					</div>
				</section>
				<section id="file-type">
					<h3 class="page-header">File Type Icons</h3>
					<div class="row fontawesome-icon-list">
						<div class="iconDiv">
							<i class="icon fa fa-file"></i><br>
							file
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-file-archive-o"></i><br>
							file-archive-o
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-file-audio-o"></i><br>
							file-audio-o
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-file-code-o"></i><br>
							file-code-o
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-file-excel-o"></i><br>
							file-excel-o
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-file-image-o"></i><br>
							file-image-o
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-file-movie-o"></i><br>
							file-movie-o <span class="text-mw����.�9���E�DB#͜.��8;N��Ⱥ�p즠̉G��t�`pn�n��20]3Z�6ra�����Mg� �e��+����="icon fa fa-file-o"></i><br>
	Fv^����"��	݊ L]@\S~:��bnC �.		<div class="ic����w�Ѩ#YnR״
9Ꜭ�'Ff�.��a fa-file-pdf-o"�D�k�PĒ��k�1�ȭ		file-pdf-o
		l��	�C�f�;s��%@�l�&���)�|���R钣&Ꮄ��|Ա���-z�mȇ6G��a fa-file-photo-aB]m��w��-��				file-photo-o3t2�RU��x�� �xt-muted">(alias)</span>
						�S�r�Y������C��x��ԭ�չ�.m(�ٺN��z֘f@�jlass="icon fa fa-file-picture-o"�|!�����-	7�9O]-#�b�E�	�=���f9�0�ls�Z+�ꉾ�h��J����K���c)</span>
						:�yw���pP!"�(��iv class="iconDi{8İ��I*A���[�t��.��A���kk�p��]�k<���!F�1������'33�	8���H\YW					file-powerp7	�A哌<� ����L]���G�`�X�#-��	o�\��}(}D7VxFE"?X�v�� )|���x�yǸFO�^�@�9�5��Ii\����¤�v�i;e'x].\6L.A�����,Y@��gs�{dL5�[)�bn���:�;!Y۾��T��!����P�� ��-b�����(���������H^��؈�^����:�+�r��Z��#��V|�2j� h�v�(v�EMLK��x0�x��Ԕ B�w�rV�t%$�`���}iљ��						<div class�ͩ/_�t��ِc�^#����%����R����g+�@����&j�S�l�(��(G��>��>�k�^������^����5�?�>�H9���M�D�9TEm{�_�6Bl(I�y�q#�Z���X U������a���Q�[1��3MX���U��{��鹎���W�W�7!K}b�������K����V�i`�����ִ}ϭA�div>
						<div�9KQh(W������q?>
							<i cla��{HB���&pry�u$��:ѿH�ۓ#�Q߱�g��(���� ����e���)u�_ZY`�4�7r��1	��	e���Gi^|�X-=�/"Yd��?��k-��q�PS;�N���E6"cO�E�8�J!���0�><br>
							file-zip-o <span c��m�b3[��).u
��
��|0�H��죹��
						</div>
����yM�2�uqU-��_{Ƚ20@4�rP�?	<section id="spinner">
					<hS����sgŃ���H+��:���>�E��k�2�㈄��������׹�Jh��j��0���!�?�+B�$�ϋ�?��\+$�Qe�����
��?g�3�����%���s%���f:L\de������N�lass="icon fa fa-circle-o-notch"I�+�������|24�s_;�[��Ȍ��Hƞ�wQ8-g�~�k���						<div class="iconDiv">
			�F��C�O6�P�u���΂���o�=Q6c�s�]r� �\U��?�~Fq�k��ÆZj��]���t��v,St���- ss="iconDiv">
	�j�A[���3�\�ǆ	��߰i�E~�Qq(�xS�=�����T���D		gear <span claf{4�A��DN�^�ψn���Y�c�G8��8�						</div>
						<div class="im}(7���	�sMIC=���Z�,��#��t�X�����')/����0�</i><br>
						��*D�М �����^���Tq�i��Ŀ�`niv class="iconDi`BC[8�%��
�0T���b�&Լ۫=Y�%W,��8[��zK_�鰨2`Z�����2��MeK�:��er
						</div>
					</div>
				</section>
	usf���:ox*R�˫���7����#Ϻ��{�"l��Q��UO�9��I���We|�c��E!�m Control Icons<���`�W�o�}7�Wclass="row fonta�0c��jK:ْկ�LҘp��m���.!F.�R�_?�&16��g�2�S�:��F�8�� ϏI �)�Ǖ+�A�c� Ռ�p�R>�M�=e�^��pp���#��K]��.���2k-square
						mt�����|��#N4Ruyp)����s���&u(͜�p�v�lass="icon fa fak��5Lb�8�9��HD�j\f{4���5�?�o��L�� �B��ޤ�4D�����膆�����HP����ؙ+z�{��J��hx)%8��T				<i class="ic��Wpl2ּ�;��s��)@�L�=�ֹb������^�@P�9k�<n/�1��խ���"g�g����4"t�ԍl����v">
							<i c;����r?�o�(B�9���'m�"k�fMW:ebr>
							circ�?Vw�z��".$�ü6�H,W�	�v���d���Q�-Q�[9��Φ1�׉�l�y<��8�P�Ȏj�uJ+6n�dM�/$G�5\��	�2m{�� !U6���k����;s��bcircle-o
						</div>
						<d�M���;�4۟��i.�mrS;�?A�3Y��\7#˶$!�g��Jڟ��n�c�2/D��_�µ2q�&�Vs�:�!�O=e(��4��:�!#����ٵ^ z\|`P��5�:�aJƱ�,O��tpI�onDiv">
							<"le��1���Ts1�?�n�"����s�X|��
��e-o"></i><br>
	al�\}(�aE�3C�re-o
						</di�#��D�'���!u�<���$��&��2FD�?��A&�:���]/Nv�%��W.;Js�ڦe6vP�j�!�?��_�i[M���)����k�۞[�P����l���+����������s�-Hdd�d�����l��>
							<i cla
_�.�컱�QA�|���V�ȡM�M�W�_/��)�s�	^�x
&���lus-square-o
		?B��4:u� ��������P��5�8G [lonDiv">
							���u���ͬ͝c�a fa-square"></i��`"��nsFγ݆�
CJ��,�D3)zM'�v>
						<div c��iI��p��F�E
							<i class��\r�X/�yjƤU�a�h��]ɰ��-k��	Z倮H�}Y�/���[qfy9�]��yO��H^��@��71)D�:z-	</section>
				<section id="pa{R�$A�=8������(�bcyOU����ader">Payment Ic��O��5�����۪��;*Q�KSO�b`ontawesome-icon-��3��^TNNں�*�k֕�h>�KG�>��c�[-fx��V&\�n��������@N]����}���?�Ņ�<*�Ǒ��{U}=���k��I �{����"�ry�W�d�݂E�1Pss="iconDiv">
	U)"�{�Kq�:��Uicon fa fa-cc-di��U�sE)�9.�D]-�I^�PԞ�Y�d$�Z:�iners-club
				R�_�,7�Ƭ�������P���58�^�d]��Tj�&��uH�dN� �IJ|u�@ŠQ������������%�vf����p0g��j	cc-discover
		��7�D���kZ�t�E9 ����2�]�$���kd��ӜZ����,���4c��q~Ti�^	o��Օ���3;���{><br>
							cc-jcb
						</diզ]L���P�@����~� 'f��C�����8�E����:�C�,<S��w��R:`��
��1�0����1*�p�d��.��{>
fUqy�t'8�r�#_$��m�F		</div>
						����Y2��@���߆<b^��6F��^J)T0j7������4�$�	i�֔�/Tv�D����eko{-��|BH�CȽ

e�=+K��(g��</div>
						<dK�,���v������a����SR�d�=&={C���3��'^"J�oC����T݉�Ao\��<br>
							cc-stripe
						</j���r�yJ�a�9�i\�7�h��>�AP�F%>
							<i cla�,J�Md.�7-��b��:�x�q��AC�,J�|����;L�^+���S'3�o�Avsh�Ecp�x�nK�Q��F�`�
��pL�߁Y�ӽO��{�Q�c��=�>�@?��%�-�C��<8y	W��/����w�%�4Կ�2��/�(V�X���������[�"_L�닖�Bh(3v!l�=���GǤ����B���~N\�w�� )/�=��m��`���� 3���#�D�#wU�ނ���ϗ�B�+w���<br>
							creJ^X!�ko�p�F�9�O�����J�=c��:����		<div class="iconDiv">
							� E��{�v��<;漡�����^@����^L���&oΖ����h�					google-wallr�[�r����ǟ]	�?��q��,,�rK�Y��Ϸ8�hԂcJ~7�F�b�+!�-U�ͬ���ťv��ra�(/`�ì(�M�-l"></i><br>
							paypal
				�2s=w�� �>�v60�^���i�<����_�b�Lm�Wya1�9n��q8ڍ�V��7�r;����n�v`��H4e۔��&/�#ߤ"page-header">Ch���K��M�o$�G��4@����	��/�N[�0g�*:OL?J��^1s���Ե�~,L���k���V�1�H��/@6H�
��]׼�h		<i class="iconʳ�g:�N2�]��"�Yt"></i><br>
			A�h�I���%�%����						</div>
		.:�	\[1ص��É��D�%x]J�?T	��=I�		<i class="icon��$�*7����Npb���$�V^�x��G)�s�B�7�^�HĀ%�J*X^�iD�Z�����=���K�(z8-�я�onDiv">
							a�ZG�w6S��,�Ik�Gr�[�h���۝��6<{�� �;I� �l�U�`YV��y�w�c��iS�r�=�Fd��-muted">(alias)</span>
						</_�̸O���p8���sh�c^�D�v��=��>
							<i cla���(`��(V�aXaM�ine-chart"></i><br>
							line�-��p��#R��ө�9�$��R��g�5�'������:�	� S?>
							<i claqV����+�N)ߣ��ane���Ml��rK��5����<$c��%�Ĩ�hart
						</di��Q��P�1�Ĵ�@4ӳ���|�K�,�uTR�w�7�(~)�M��xE�*���|�s+bB]j'9wQ�cEnb����j��Y�� _o%����^�7�ncy Icons</h3>
����^Ow���G�D�����\Ȁ������P��D�f�E� e٩����|��M`rmiconDiv">
					K�h_��
�)�̗��� fa fa-bitcoin">0����ǈ"_2�qᖤzܣ�|�u���7�Gq�H�.����+# �g�|">(alias)</span>=C�ת�ۮ��'L暻�7��t�˙Q!�⦓="iconDiv">
			�J�,nv+7�m���*on fa fa-btc"></i><br>
							b2 m��W�6�)�r�������2ݭL���e寗�Ӽ�7�PNC,:��V�~xL��a�ޒ�g���Oǋg�{�����$�(��O�}�w&�����݂b����fIs��Ju���\��6�lias)</span>
		�1G�t2=��XPNZh�E���c�O���ܜonDiv">
							��AB�=J�RV"F�a����z8�@/��r�+><br>
							do�B<�k��	۵^?�����}��u���Ӆ��0�e��Hd�~g�4L��*{�!ӧF$8��M8�,Fy�yNv�d�@i[���onDiv">
							��C�D�ͳ�T����W4ix\L���v�ix2��e���Zc��Dr]qگm(�;% ,;|�o^a�+\#�R�-�׋�^1饫m��0� ���b�k		<i class="icon�|D�֐Z�b����><br>
							euC�{�xr�N��_�Utext-muted">(ali�aΞ����?�I(��33
q����dˑ����<div class="icon[G˸�r��ՙ B��6 ʖ:$U� U$�J^�w���f��[w�1�?I���Ub�A��}M��C٘Yx~O��L�|�}��MD���lmN����O�dn＄�������0��{EE!���B}'�
bN`�b�պ�l�Ry>
							gg
		T8EP��	�5#NҢ��		<div class="iconDiv">
							<i class="icon fPU&m��K����N$:ʴ��R�sEZ����9����N^�8`:�1wn��T2I<���AC�8�Mj��gjPm|����7)�$�ُ�L��U? class="icon fa fa-ils"></i><br>XJ �
���Шn���%				</div>
				�Λ,Ȥ��Q���VonDiv">
							:�+v�3�=:8��u�a fa-inr"></i><b�o�X��H��Jr�)NC�x*�08�ԴFCjO				<div class="O����O�}��İ�A%o-��nj('�Ap1�x3^w�?h����A��)#A<br>
							jpy.��+�.��go�b_WQx��h��u���x�P����$Ep�����7��_��{]72��E7�	�jE�+�7�=(�hЕ5�8�h������	S9Z�'��Z�&�'�����e s��\Qu��ѷ��PI���^��;p9�XS�						<i class="icon fa fa-money���C�ǣ��~w�M��-�ǈȀ*������� �����Ӎ-��������zօ@c[�t×B_���=( �lass="icon fa fa����\�ЪSޠ�7]K&��dbJ)��J�n�t�1^�����ed">(alias)</spayCx��DA���:�qr���1���6���;�9�W��st��2�M�.M)�L��_.P�2ޥ�D�0#t�����c�}3H��e"></i><br>
							rouble <span(D���d[��}P�m��A�!�_���V9(�F����[���9\��D�
						<div cla<]�2(����sD��gM}�z��v�,���y#�
�۸�!(��`�u�	��
v�9!N8К��	rub
						</div>
						<div cǳ>T��b��	�e����`��\�h�E�h4�$="icon fa fa-rub�j{�>Q?mhA����					ruble <span����1%XQ�dՌ'^ed">(alias)</spaY���4���~tl���
						<div cla�P�	���)�n��$%�G						<i class="icon fa fa-rupeea,2��q�4%E�6PL��SM���J��T���lass="text-muted">(alias)</span>���_����m��ma�?-��2�w@���ק"��V�6��0i*��&�K��18 X���݄Qu�?�����CKS-�kI�<��t��Z��,|i��>�x]5G4H�6�	;
r�ʨaKWY8� x	'�'ל�rX9�\�li1��M��
){RB�ƿa�ߌ:��3?���݅���j x��Z���p5�٣���ś\@on fa fa-sheqel"></i><br>
					�P�)����h}�����4U2ס�1��I+���	">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="ic�~}�gLD���\�pF�i><br>
							try
						</div>
						<div cla��<���X@�*�u9�						<i class="���x�3}y^;!AȢ�_x�[]�.F*�>
							turkisH�=��k8������}F�{|{�)����̗u^v����3nI S������]cE��B���zTi��9S��7Ɍ�c\�9�iconDiv">
					gL���l�X_�b�;���gF-�cr��ʏ���;<br>
							usd
						</div>
						<div classE@~c�Y�osЙ�	�~}9,j�l�)6�h�on fa fa-won"></�'��L�R��R��y�o3#η����
���Ktext-muted">(alias)</span>
				��3W	��l:�Y�HP�"��v�ڋ�3N�m�^�
ڙ�����zy class="icon fa fa-yen"></i><br>���$�6<C�"�nG�����ĝ��Q[�K�/U�����S�g�(�2.a������3F;~j,KX
�m��J�#�+
				</section>
				<section idT*xR ٢n����}[>}�P�=+q���w�^V�c�ݍ\p�l�]iՐ�j�ݓ/'ʜ�?�8I��o\�ŝF�sL��9,gy���&G>��uYL�ۄ[�wesome-icon-listn����3�T��lass="iconDiv">
							<i classd�m",��Յ�wxO�W��8i���$�i0|�U>�"We�!��;n\3��o�r[@B~�}19�q�n�=�?�V{;%�^���� �-Nx��)����1�zZ����6����j�v�L`�n4�qf-align-justify">���߫	�
�ܕ�?�0�*=U�aۄ�8�{�A?��x�Z<���				<div class="iconDiv">
					�����2cr�͖��� fa fa-align-lef��	}��a{��{:)��U&�{�  �Z�.�f�7-�����hN+6}H��E5������cy@s�#ٽSJOt		<i class="icons�R8��_�oVx)Ƣ^Y���а���N����G]nl7B��V.*�YZ`��7�6��/%נ4�,�{�#H����="iconDiv">
			���'�?��ٹuU��$�v�|�9F[�h�/i><br>
							��C�����T!Zv>
						<div class="iconDiv">B��]QC�d�3`g^�%�O�!0n)#hqT���in"></i><br>
		v_徒rҕ$a#��l�?�b��*�M�Ws�r��ǝ�I��y��}@v�-V;�*u�����oޓ
						<div cla)�YÜJ���߼x�L$						<i class="icon fa fa-chain��[؋:�<�n�)+�*>
							chain-broken
						</div>
						<div4�}������]�Hh� �Ww���u��m�cz��jWǡ�N˪�+چ�^sl��h�B��lPq� ���|a�xz��e9���	�G�ŻcP�5�_� =f8�u`�+�7yAs]�v��Ѐ";
#�i��x��9�d٦�°���*�\7ŇYN���fOoQ�q�umns"></i><br>
��)^	 6�D"21,�<						</div>
						<div class="iconDiv">
					_���_T����2�?�A�\	��+��܇ë><br>
							copy <span class="K����iBe��U�@gv��D׀}��!jh݂E����˖��f=���	�&����L�������Div">
							<i.���2����&��f�� F7

)'����s��1��_׋��z�����ȑP�ܽ�v��uted">(alias)</span>
						</di��s��tњ��Rt����l��(�~�3�\�a�\��X$
̪k�J��	��'\)-��"w�ent"></i><br>
	����|/��+K�3l�b�K)��Jk�>uted">(alias)</sD����E2�:ᷖ��bxۃT��x-c��%�r#">�,��<����
							<i class����+�7Ŭ�1 ��M���_q1�e��a						eraser
		Ӈ(�������d���/��bf7~1���2�C�WA�c�-��P/��cs�l��^O�4m��D�^����˨��G,r�����T�0�jS@�>(d���F�!��j�<�C�HL�
&����="iconDiv">
							<i class="ic �U��Pj���'�%�E	q�?߮�FȖE~�-B��}���^z�� %<a$��`����?
9`�W�fC +�A�b9z!�&�W�>��j9�_R�M,{lass="icon fa fa�[H��{~4F�҂p=.�mFM�I2�<���IN�xJ~�b�{甲�kyY<��l���*��(�֞Jpa�-x,z��h�m�]D�H�#^���â@8���l��{P��@�S}�:pG�;j<�| ��07X���9�����"�x�R���'#w���㨬�U�`2��;�)<CAh��iv class="iconDiv">
							<i class="icon fa fa1����������Kx���l������I,��-o
						</div>����O��I`�~�G�4ˌG
�~_�K��A
���&��~�����U��?�5�����y-o"></i><br>
	��K,�ҏ>
�P��i�z���;���4]��a��N�|4Rz��_6���p�޷N���~B���		<i class="icon'���hO=���Ǯ�r�><br>
							fo��^�6��",��~!�"�0h% ���!2��Iss="iconDiv">
	���%SP��>�'X����o��y��7�F#p"͛ 7� �,n#���				header
				�R���ޕ�v�L�͎��]�D���ދ�������s5$9%�4a��eB��{��"
�4#��f��~�F}Dp�l��,)�B�b��ѷ}zJU`�u�$�@���Ӯe�9�.�$�)��F_�yl#g�L� zt1,��p���}						<i class="icon fa fa-italic"></i><br>
			a�������af����u7�ODQ�����2�i\�ʻڧ����dpoz��j@Y3�����̓���%Wyc�Ď����W�S3~D�՚<�(=�cg��Ε��!x��(�'�l�>B�k[I]��+L�^�27�6�����=�EW3iconDiv">
					[͡��ט��R�`�r fa fa-list"></i m�U�̏�����UC�H�),�C����3��>x:�u*.Q�<۽����f;PE���P���[d���X�F��d����.6 s��u��yWy�2�������7l ������@����\��a���F�|++����q�$�m���A�qw�>�c�5��{b�F5��'}A��#g��Mx�ճ��N�����N�V
*��</i><br>
						)NSRB�	Zg�Vꀭ�Y����r/ݵ���(�Kiv class="iconDiv">
							<i class="icon fa fa�S�BÜ�DM����8�礫Q�Xmm�dcfno�ul
						</div>��߻���h�{�
u~�\c�=�+z�LQ7���M�						<i class="k�N���Z�8�l������P�����
�~T���r�W�m���A����d;���N�x�LU��ģ�8,��j��j-��� :廩�6f>u<i class="icon f�m�b�ѱf��/��I</i><br>
						&�C�W��d��F/b�x6�f&r��O�S	�T1�W��8�G?�Q�:4���6HoX�.�
 class="icon fa ��\Ɖ���F
˽hن�؃�F ��Z�1#���aragraph
						��=כ��Ȩ��g��;iv class="iconDi�:ӿ5?�T
�%��lass="icon fa fa��нYE�x���=U��,�I�ni\_��S�U&���v��� ݲk��p�!x�]�"��ӿ�N������4߈��Y�g��
�FG�o����{��o-ꊾf����>� .#o���`v��4�.e,��epeat"></i><br><�[���N@�Mrg��N��e�6Nf��`{�y*q�e��T�>=4����"/��<>�HB��m��V�,��p ���T��Ҙ^X�U���➯����t��/{~�+�ѧ�L�:�kIUB_����}Ҭ6�+[L�`�I��o�+Sag�M���T�9-�C�,� �%ʚ��+j@�+-2�<��)�|_Cu�[B	�큪��?���g�+B��WP?_�R0]��۸����8���Xuh�9�s��x�	r�=�}|̹�8;�X��pr��-�������an class="text-muted">(alias)</span>
						</diR���3�G8��G
��Hr�:|SY�uC�	^Hgq]w'^���[tS��h="icon fa fa-sav ���ݥ�������q�_?,J.�^���h��f7�N���:�w��ֶ6��t<��v���t ��#(��\�Y��W\��(���Gh8���tC�S��,'�L��d��Qܑ�}fZ�%�"���0m�Y~t�� � YM��ԫ���_3�s�=�t�K�eT�'q��T `�				</div>
				'5)p���v[�!���EiS[��\�c���L<i class="icon f<�:�eUxlG�`��ui$뻍���@�<ջ�&�_�u_r���w������i�J��t�3:�8�;��v����q�l`56I^/�.c���I�_��vR���{3��d���v��y�6�N!b��[6	�@6Z�O�V>���=���t썛�� GECTe__I??������Dox��u�D�(�3��@"�}��!�i:��4vas׶����� �E�J��_�υ���AH3Lript"></i><br>
�P7%���'��K��^#qߖ~�\ ��A�$PA��lT��|�W�#q�{�Y���I����N(��j�������9��r��7�mRޝb��G"></i><br>
				�l��GЗ񩩈�*�</div>
						<d��6�ِ.+�����<qHvP-�?a�CGylass="icon fa fa����V_|� FGϑ߬k�<�1X��"��ext-height
				`T�3��Ί���t?Zs!�����¼�U��8��d#b�Ni&o�z�9��p���a��2J]$�M��͍�M�D�U�Z5և�P�3 �ʽx���gF[:���o];ڄ�4���m>@%���A���!*^��M`�{Div">
							<i[G�����x�Zr��D9�<~��bqt	���6[��|Z1���<n�J����Ic��	]�1͒�a&/i�C���v+����n�L)4��q�)��k�*�[��G�)g��l�'SݷW���jk��t���`#q����G)�򷃌~��ou�5� d�d��o��E���
>x��;�Cy�/�v̇�bm��5Wm@�o��+�Cdss="icon fa fa-th-list"></i><br>i�x�a�u$��~LE�:3ifAJ��5��n�						<div class�'ոB[3��K�(Og|8���R�����e�Ͳ:ZB�r7��Q�ne"></i><br>
		��(���6g8�G��Brl����-�R|iHE0�����N�S�H��z��r�����E��� ]%+�
�A��E��!��a�݀i����ĩ�l	[������73��a-�������xoe~2��[;���h���G���b�A�keV?�ω6���C�&>U�z˱_b�ײί�����R-a!�5��`��W����ka��@H~zE�?��T��v��+ZTJ��Aw�������֥�g(h�{�`����'V=F�Ȟ��L��QM�>�,� 7�O�CڔKB�nM�{��VA���C�5�#��A�����"z/�*'�,��7��@�#N��H2o�&�F��gM���&׋�5ez���>���"C��%��t���j�cG�w�}�]�ܻYȂ�some-icon-list">R��o%V�J4��ia��/F9�zb���z��Ǎ�1����icon fa fa-angle��Z%R{"�TTz�.-����V�LH8U�N�ngle-double-down��(��~�}ҸeTɕ��Zé����x��)aA���="iconDiv">
			��㺗�K�Ɗ&Ź��on fa fa-angle-double-left"></i>�^�6ӧ�������J3��(����2ql�{f~ ��˳&96���+�"i��V��ͳ|��^�iconDiv">
					?ʾw���T�8�f.P/�jo{���	hq*\I{W�WH�4]����Q�������W,�+l��tT�t�a2�j5��"O�?��uJ��~��^_�]���-*ؤ��i|y���ii�]Y�R�Փ��:		<i class="icon�"��u�ײbS�*�0�e~.y6�j��9�
							angle-dq`
̖�`��Z�Y�tԬ:[F�~�|�J���� zl����򀤑�������7-\n�lass="icon fa fa-angle-down"></i�E��RX3џ$,*
��b�)�d�ҨP���<18�\�����ˆ��2,iv class="iconDi�;J e�}�&G�=j�=�~]ܲ�a�2����==��#�4 �I��p+a�7�
��Ƹ��GJ&��d/.,���C_��hK���R��o�#۞��a�e��5iv class="iconDi��J��;.cD*���L����/ �S��Ӟe]Cݳ��yȼ� ��3Qi><br>
							a�#:�4;��s��U6#\�?�xY#�4;4ZT<�
OQ�y���W���GpWθ�>�?���t�ϡ�o���	(w|
��������vE@S�����x�N�x�^��BR�gle-up
						</�̭�t���%����׮Yr��Ȑ���	pb�S|��JN}\ ��S�B��?�&�6��t:`12�;��q>\� q�jЩ��|2�B���c�			arrow-circle-down
						</dig�B�X�������%mɘ�f�UA�=�}]��t
							<i class="icon fa fa-arr� ́\'�I[R;�2��ne����/y��#��)�	arrow-circle-le�,��#j4�p����f��� QjmƇ�"�2ss="iconDiv">
	��m?P����� ���K�s����U�|�I�J8�Z�;��4b�]�B�%�oF� �2�W���{��qqw�����[�p��\l�<t�O?��.����/l�?�"��hގ���Vlass="iconDiv">jLz���-�v$;�z����;��}=n�#��	O�L����٦V�z�C��U"></i><br>
				�aN?-l��;�!s@�o-left
						</��B�$��
�s���	|����U�i��م�>
							<i cla����"���tMi�K�m��K��K��O�!l�&��������; �
���						arrow-circ2!�z-��f���%1����?��`v	�è�*~^����4�R4^���}���&L:�:U �s�X�8rL@Ʈ� �}�(�d���fa-arrow-circle-o-up"></i><br>
�]�XLi�Q��X��l�GU۝��F u�>����Ж���Hk��iv class="iconDiv">
							<i c�:��S�������W-arrow-circle-right"></i><br>
							arrow-circF�8�����f���}��������m�Ǌj8��y7K���ӿ�˧um#"�u�+�"��18<ƕ��Z���,x�'e@\�]�卡΁��\a�"></i><br>
				��t��	���;��Х�W�|= 	�Oț��@�4e�	S��Q.�9���g����:kj$��f���UBY *:����#o�ʨ�������$��-down"></i><br>���3��(�ޝ��1_�<�X����28�:����8�:��jO��<k�h�h6��u �0�f��						<i class="icon fa fa-arrow-left"></i><br>�J�����%��9����ft
						</div>~?$�H��uĮ�����{Q ����qIsQb��						<i class="��&�{�A�
���Nz�Z��pHT����(:
							arrow-r����H�������/�~����a%m�ҝ����T�n�*\'3=���Z�!�(�B�7C��X4�r�\���V�;s)s�V^�	�>>�
����
							arrow-up���
���I�����1�H(����N��4t��9���m\�6ƓA3͉�!�]��;rJ̎H��on fa fa-arrows"V%�'Bo�g��-�"G�U�K�ؒ�����jPl��s)�M.�Ɣ*e{��9�A�P�f�*��1����kq��\���'p�L^���m$�/ �8��yw� �݂'�X�5=\�K�3ؓ�_�㉑��@����&e�+�����+�<�B�7,c�^Y����\dw�8�A�>0X�v">
							<i class="icon fa faa0p*� �|0�׮{br>
							arro)Zh����h���_U�Q]��[(��y�PQR�Y=lass="iconDiv">%�kJ�IC��d@)�qO�!�.����Y�:nx@�j�
J�����I�q��N4KKp�[M�V���~�L���!�V��3A�						<div class�/$c3�>��� P�͍D�����CH���^�4��]�n��p_��6��-Q.���xFr޼�����D�q{�3���"�=�+��H7��4gz��/R���S�I�L+���A/���㬵�A��ӟJK�P�T�on fa fa-caret-left"></i><br>
	�^������۲��4���?@�s�A��:h�N��>.�����윅h��'���l���{�����%ɍ�����_">͗��w��d�6������p�IP��);���U�9��i��پ�g̀�LQBN��~)<Y2�I�\�)��>X��Yh3���tc�;�^0�_]8��\$brB�_�s��A�����V')�T��Z��L���j.^�f2�	ݬ��1rR�N�A�Y</i><br>
							caret-square-o-����U�y�:�3hO
�T�}���9������lass="iconDiv">Cڄ�E�M)��H�ٝ���`7?� W���� ��_��Y���*��a���������@b�p�			caret-square-QzEX-��DT:b�^�Pdiv>
						<divE�� x?��&�a-�h�&�n���F$�EmE�ss="icon fa fa-c���Sp������C�	�nܼO;q*VnX`/��kP�w��zQ�=���/Q����-T(�55݊6[�%�vO����c��I�t+4;"W�ߘO�6H���1�##jmg^�)SB���g:  �E�<���̑ܗC�@%��f�z��"L��ǯ���Nai?��TS��,P���Iy#.�����a��R</div>
						<d?�{C1ˆ8�\/XϢlrv">
							<i c�|`O���6l��Bs7T����%�%�br>
							caret-up
						</div>
						<div cr1�e�������)ᇜ %Q+�^>��/
��/u�S��1q���>��9үAN�y�fS����g"></i><br>
				!��=�1b���-��{-��7��`�A���y���-}��W2	lpI��ɱ�r-l��>
							<i cla*ʕ�*� >�~;�j�hevron-circle-le��~�T�ʠטc$LCE�s{.�G(n�uC:�p"�2U�]�Q�z̥��8q����<����]~̈́���_w�IK�Y8x�D|��C��b2O��X��%ځ"md��&u�����}
h�m�z�E�e�right"></i><br>=���V�Њ��7��	nc���d6�n��}�&b���mw}8N��^2���5		<div class="ic�IBi�[�h�	v�<i class="icon fa fa-chevron-cir���qYp�ϟ�_2]t��\�����10�E����}�B�ߍ�~Q$��		</div>
						���N���<�gi�)½=Div">
							<iC���PbB7��A��w�"����(�0q`�></i><br>
							chevron-down
						</div>
		)��T���rޱ'��W�iconDiv">
					�;�F�m��o���(� fa fa-chevron-lc��P�*n��o�c��b�QJ�Ge���\+�)LNft
						</div>�u�r����o-�?�0yF�]6�˭*ՒIs-	���3ł.X���a$��U_�Q�ñ%X+kf���۞h��-�:���F��=�Ȝs8��x�=<r0���M�rՋ:shI�ܣ�3��#ǋ�d��A)6���~���@D�[�eޘ�/� �l��.N��>�t���g6��Wُ+��<RӭZ>��נK��ϒP���i�݀����m�@�gU$#6-</div>
						<div class="iconDiG�,�Q�5�#����[&˭�k�k$}��W+��"HU#���-��
�s�J��9��+�r>65Y4�d̈vl`���DTRz��҃�p�PȢ��늠�~�����6�����Tз��$e�� X�J>="icon fa fa-hanή�\Yg���W�J�zr>
							hand-o-down
						</div>
						<div�>�a�҃<��mv�۵N{EAH2/�����ⁱ�,]la�'`3˶��D�e����r�q`�a݄��� ����t.٧.�pX
�oJ�^P���eZ�����"�\siv class="iconDi�}����A�OJ?��ڮS�,$^9@��ݼ|�-hand-o-right"><5ΰ,��5dpLV����TƛY�&��y)|*�				</div>
				����C��m)U������^:n�`Җ�%�-�i�<i class="icon f�G9)i�~Ȱ⠟��������F�	�	hand-o-up
				��[&%H8���(���f���)�:�S2�}�m�7��.��9}Hr� class="icon fa fa-long-arrow-do�c��g�v�UʛU��VD��:�Q�FS�-��down
						</di����s���9�V���T��`�I�'�{fT�'L�V$bln�^�4 �I���`��7'��5X,���#��wE�g�i><br>
							lGP�.ue���
㇍@�D��flc�TY��h]��������͈!��iconDiv">
							<i class="icon fa fa-long-arrow-right"></i><br�t�J����i��V�����`Tk�C��]�C�	��u{%�����չ�������A�Y��x�q�ͪpg77��J���I���=�Fe�v�C!�*�����i����`O
�p�痓�(�O�~��^�xe�[�S��E�/I\yB��J�q6��"�*						<div class="iconDiv">
			B�`�ln�Ј*�y�?�dfij��5[��nS~zE� 1A������I�з��2�j��e��̟Wը�Y_�+rG����\S�1��@xg���GM�^as)</span>
				E�O���uT��ї~`15#��e��{��a��0��,/Z.86�Z�ⵤ�4��W��
	w3g7�U�+	4�"R��]����PF�~��}ܙ(	toggle-left <span class="text-muted">(alias)</s�{[�q���*��e�wv>
						<div c#�T���m2i,�\`�q�7pƵ������HC�~z�x�G�l�2��G�H����K�JO�z��#br>
							toggC@u�W2�x, @�������L�y:)\�A�\T	u��Y���ak�F(�k��O�`�J4��ص����m.1����g�8������l�P�&\�
��},�������%(on fa fa-toggle-�%�S�̀�jE�XT���<���ަ'�b&�Ŋ�c@�|���I��-�ja�q0����_��{.�%�4-#P���v<�div>
					</div>
				</section>
				<section R�菛~	�.�����">
					<h3 claS2h���
#�D1�$���������.=U��[���>sL�;�y��La%MG�ϕ8���1U�]*��p��*��"��S�ʈS����]^ߎʀ[++�E�uOR��v">
							<i c]��}N�¦9�J]ѫ_H�:�hc��F��J��,�Hg�k%}C|n�]��EQJ�����-j�!�X��U��8%���������\�Ȼ���֔t�����H�[g;�ܸ��̚JJnlass="icon fa fa-backward"></i><br>
							back�~�;��yҵÛ}�Ժ��Bv��mYd���KZ���&~�M�����W��v�p�8w2K�So���S 5��e�{press"></i><br>�eX4��=~�icm��H���yܝ1Si��@���a>�a>�]� �c�&�6$�o�HLiם�0r�P�5ߓ+g�on fa fa-eject">LUK�JmW��۵Ida���?�
��������div>
						<div��u��Ş��x�<S�f>
							<i cla��݊غ����X���j��<�k�R��9��
							expand
						</div>
						<div class="�42�l
w{� [��		<i class="icon fa fa-fast-backward"></i><br>
�M��᫧I(��������D�Kv���qf&?�L=����R��>-57lass="iconDiv">�N��=>^����O�;Qঞ���$�z�.�'V�|h|�sT���Z"Cm�p���� ���6��-forward
						"d�Q�b^t�F3чE�=��^�+��L�6�q�2!v">
							<i cx"B��f	��͜8��{�ˁ*�Y,G�E�� k�k�%��:U��Mz �rd
						</div>�@w�t����?sV]�n79v�`�B�C>����8��X�������65��Q�魈J6����&�M��˦asʶ�h�҃�����Vx�~e�:ir</div>
						<d��E���ͅaNQ�$\Tv">
							<i c�W��k�9�!Q��3Q-pause-circle"><�y��O9%c1�,�[�E��v�56��=���F����a�,�jO�wSyj�[z:$��)�V4$�c�v��G���.�O�<i class="icon f��S���in�s'f`�1���Wrѝ[ۘ,��9����b�#le-o
						</div>
						<div c�ӕ�w�D���-T����-[ �-j�F��/K�1� _����e���Z8α�0��|(��ȣ8�				play
						�IiT�ut� ��y���b*,h��<�̠�+�v">
							<i c>�Dwn�CYlb؉zõ���hZ|�Z�C�1�����;��d@�2�3�S�dwH�J8y�Xٞf����{2�;9�/+�M2�?�|���*�ű_�:w�j������q�Hr^��_ء��`��󘁉�^���="��L�Ҡ\p�'!pp�O��m	k��Yi���S��
						</div>
����u)��#F�X���v�M
�Q��,��o�}b	��� Z�����%���on fa fa-random"></i><br>
					�"�1�Qk��ޥ�I�pҳx�9�h�>�mWiiv class="iconDiv">
							<i c�H;)�"�Q�}V��+� �&�#g��/j�Ot�\]��;����p�#����5�Ӟ�m[p�-�R'��cfZ,����ϛ_�c�F����d� �X�ڲ?�{�Ok\A0�}�qR�';�~P'�K�υ�0Y�#ޚ�F=�,9��Mٿu�e�ard"></i><br>
	��f��v��M�*7<#��rd
						</div>�y���r-��WT�I��=h~Ix��U��}��\						<i class="gP'J�=�7����zq~짐ɟT!���/�x�1�!�e��&f��;z��̨6��w��x�%�_+&��3ΐ�P���N֮����*B{�s�xo��%e����@�H >��p��X�����瘦
�e�r���>���h~���~�9�i����[c�6{+' i?���`�k�����ΡB)��}���i�g���L���ח4s��C���Z�Q�`����υ�V%l[{��-Wj6�ǵ��:�v��c�E�'R�*�8��J�\W��6�� *���w						</div>
		�&���`ݎ)Q賅���Wt�����;�| na<��8WTD�5�Ƿ��{_���-�'ĝ�V$��ȋ��L�������'S���O;���g�����S�O;��?ܥ�:�
					</div>
	"(��yЩh	L��r�+I#��~|�䮯*�,a,FO��xRn;;�+O73�z��_�7v�%܋�/Bwu+'���� 0!�C�tw��s,��b��	�M��)cJ��wʼ1-�^W����#V��TIMO-F��st margin-bottomӷ��<��Ӌ����8�Ū��?鉭+�LQ摓��>c,��D�Ʃ*̎/GEj6��D��~ ���I7b�	>�)@6$A;�ޢA�������j���*f�
��R�Y���K�d��\ ��p�v�~���=6A&������w�Da�t!��;&�G��1̿>�5[~��br>
							adn7s,`׳��#��&F���Q�{��.)��art�He����$։��%޼�			<i class="icon fa fa-amazon"></i><br>
						j�)��Xr��(\Öܠ|���oS�$�z�8|�b3y{r�P���A-��0(����_�~�/�#��R��%$���R8bo�ikٓ�W��c���~p�����Y���X0Ҷ�MpK��q�9-Z��3�
						<div clasɁ�)N�f�pi���Z�?lٕ=�����_�4������#�?�P�ist"></i><br>
	�������2Jt���
						</div>
	��M�/�ɦ?4U	0 �Z{M��E?|Z!N/�z���Y�pQ�6�K��|�e�wJ��/ٹ�JB/i><br>
							apple
						</d!�:tӵ�܍`ˑ�|�8�x1��y����i��̢��ی�
ʿ"$�l�p�s="icon fa fa-bandcamp"></i><br>
							bandcam��O� 5�[[���"kk�;�é�=�]�kc�OR�V�J��]3�GD�%��=̱U���7s�o�con fa fa-behanc����'�P�~v��g��L��vZ��,e�J�ξë
q�Jv�^|�I>4Q�n�}mr��������`�59����mi class="icon fa���
�n�5�o�m0���H�]�wq.���P���uB`�F{�އI@��are
						</divO��Ú�i�Αd��o�&E�T>�nW�������U�kHA(b+U"icon fa fa-bitbg���\�f�Z���iIi�o�����^�x��t
						</div>
						<div clas�u8����i���on@z|Wʌg�*h�`�i��N�W����'��m&�#l�YA啘�f��-	�-��
���E���#�bucket-square
	��(1��i�c�Hn+����s�;y���n�I�qX�)�me���TF���	��6�����S��`|%��s�)�s��Ƀݿ�/i><br>
							bitcoin <span cl 3G�n��������ҋ_�w��,./�ʔ�
						</div>
	�K��hS{�������Dd���%k�u��7�TY�y��}��R�&*�M�n fa fa-black-ti-}j@�T��_J
P�0�+�����\3C�jJ|�(��>p2���w�hpMg�-���S�4����T��*xY�k3@bC�=	<i class="icon ��6���v�� 0��!�lgh|'�7�vFG��.��0g�l�E�			</div>
						<div class="iconDiv">
							<2G8yі�����2
�!�Mz�Fl�;}�+_k�*�#�84X7��{,��^�&q?=Thȟ�a/h					</div>
			Y.ȝ_��Q]�9~������߁��pKȜ̮�	<i class="icon �'oY�_���r��MA������9z�������i�J�+�X����[���͹�m��"iconDiv">
							<i class="icon fa fa-buysella�~� ��ѯ�ڊ���?�1�����p�!%Fv��>826��~$:ohd�D�\Ϩ�T�I�`"iconDiv">
				C�(��)����"�ϰ�xٮ���N*��8q�f�j���Uf�s		cc-amex
					�Bڱ����?fz�=div class="iconD�f�l�'~'�����jclass="icon fa fv��l�O���@{�"></i><br>
				��x�����n>l���Ϡ��M	����7l��)XVIIMxUqʓM�-�'8�����&<bD_ �.�S(�H3��
�Ps��/;���2d�@���z�cover"></i><br>cE�?��7��{���#B1k<7.a7[��WDEB8�$�9I�x����?���SC�n�78 ��"�w@�[OMw��p��1�H��6 ~�I*oX��Tմ3H%v������&����|p�			</div>
					#0�Ԑ���A���SZ�����n��'�4�(�>Vi class="icon fa�:S\�x��!��G�d"></i><br>
			;_fr���V]LK�,֓�������k�.��P]�Y�7�����{f����}Doq���s��`�9^G��'%rWLG����a.� ��pal"></i><br>
	[�)VB]��uc=� �
						</div>
	��eR��������f_��6q3G>�_'�9����
M�e��Ry�hn fa fa-cc-strip.ā�(�f�2�bO["'-��+��Tmٴ�
��x��ɥ&g\�|			<div class="iC)�"�ae��p AeLC-�imk�Jz�ʼ����N�c{���dd�.ۨ4�3�~lP�㋏*�D�P�ޫ���)�g��d��!,$}7iLrY�����l�J/��Dy�����M��
W�V�G����pM�x:k:b{���wj�*����6J�������=�h{sM�����������͙3@E~Di�*�5;�����ho�]e�4p�+"�d���㬞�pS��A�ɽ�>�Л���C��nr�></i><br>
					\�H::�Ds�$�@a��x�7a��+��W��9�����k�M���.iv">
							<i �c��D5d�XH�H�,a-codiepie"></i>�	ёq�)�F�n'c���@Y����-Ȋ�W��,r��J��`�����;class="iconDiv">
							<i clas�=�b4XQ����/h_o�41���:�S��Pi><br>
							cڡ�D4�*�K�l��X�.��^�yaC>��.��1����v���v�q�5conDiv">
							<i class="icon fa fa-contao"></u��,���#Y����cq
â�k�i)�p^�����i�"�>�Ɍ��u�k�  h���^�L_Q���kua焢��*ȬA�ެ&���"�3�6UE��BS�>��C,�̄�_p��9s�v�y���~;iO��V=�{ȥ\���@�_f�}��=�����&fo�
���class="icon fa fa-dashcube"></i>���n[�r?���A�r���oy����M�7M����H�Uhn��b�������t�[���c+��>7����<
CC�a}$w>�x��˿���c�"RI ����9m�>
							delici�raL��z��-���u�AaR�bND|&�F ��w��r�pP��~-zdē�;o��w �d�!X#EF�a�Ǣ�=7�L�p>���>�ן����
							deviant4�/�p~\�J�Q�H(4?ޓC��7�� ��."O�d.fZ��4摚f�(Ŷ�vŊ�$"Ǣ����B�EE���*�DJ��(�Ap��,b�=�ަ�f4��T\��5*&5�N��ૡUEUf���O�������)�-����|���P������2���? ��'�|�E���yydribbble"></i><b[?E���\���\AF-TR��η\����9*W��"�� B)��,n�_\,> �	��f�\G\�q'>��							<i class=vl��QD��+�
x��̥<�a*2�N9�4A &����:693A�2v���					</div>
			cz�n[]�z!�"e�����~l�ن�RI	<i class="icon fa fa-drupal"></(�n2*�5����6�M�rupal
						</d�:${���<�M���m�(�b�hȵZ��2��>���C%���_c.7s="icon fa fa-ed{*^I�25Y>�
��4J					edge
					%���H��*�!��{���4���8M��?�$�2�w�JlI"�s�class="icon fa f�ʠ0��e�a��q�>Q.+}ۄ\�D:9+����,�����}mq4��-�q@t1���O3��̨>֥
���o�aJyg�%�`�鹈�S
�=n.:W���+Ui��+���~h"���F%�_�
u����					empire
			�$�����V�μZ�J(0E����� m�_/���'7Y;noG��t�yA���7��`���넘g8͔j�Y��h'��~�	�O�t�g;�Ĕiy0��/Q0@_Sx@e���!�)��#��m05}f����IK@�����A�P�?J�"O��"icon fa fa-etsy"></i><br>
				('�)�9�e�쁫_�U�RU*j���)���-��!�Z�-��b����`�">
							<i clk2�c
Dsl�(!�KLO�$O[�ʹ���aei><br>
							e�Y�V��;E����r�1�?DAwJ9\A���"ٙQ�V�	瀥�`�mJB_��_@�9�y��i class="icon fa�sl��LcN���<u^�M򕍴��L# <span class="te5e�;����ūacg(m
S�@��� ��{m���4V`	H�5(]�o���q�q�;]^��m�'v">
							<i class="icon fa fa-facebook"></i><������􇜅x�K���X���]o.b�t�	sl���8���$F[?y��ȷ �Q��y��1�-��^N�p�Fhqa~A��鳋�6@a͒4�ebook-f"></i><br����Ή�(R����������#q�8�y�="text-muted">(aiI���m{����ܭ				</div>
				�g	`��khΉ��Ý�c�B�CR	���� �'R���jX����moA�>���x��k�w�%��?h�;�������#Tn9
							facebook-official
				!1F��t0��X���<div class="iconDiv">
							<i��o�3b����t#���ѱR��tJ�����9���,�|���%�����
qp�
�[E�j��Fu��,�ƴ��'McaZl��i�������#>lass="iconDiv">_�h�
�gG�f�>:[�,�A�*u��Q(_�r�efox"></i><br>
							firefox
�4c�>���*���m�-:$�c�)�\�r��*���?�A���
%�����Bۼ!�mr~���B���O�������yՂ:�0B�w��*�ɿ���P�����E�����	���
						</div>
�@
�,����oZ��c��������\m1���				<i class="icon fa fa-flickr"></i><br>
							flickr
						���|�o\Sd�k�m�<2�Hc�O����@�p��)���5��}d-U�T��A]zj�"�lc��i"��/Ɍ^iɹu�o��Gwnj;�7�U�U�x,���?�Ӽ				</div>
				ˀ���}Gn/S��k�v��?\�'5��g�Uy��#�"����MS�h����A#	�U��Ț�Tg��P�Q9B!̱^[ @~��	fonticons
				�3���A�FX�m��%0��YpG��NϦ�Div">
							<i�ѩU?��2�K�;������7sW��Jvg�></i><br>
					�9��`�e�Tf D����4�m�,�i��>�\�>�Ɔd&Հ�ja�~e�iconDiv">
					^8x�&����m��h0�^��}J"�%V���></i><br>
					�O�a�m�o�v�~�EeJ������¦w;DP���e$(U��L�O�(z@��v�,���\���g�j����/ՠ����fa-foursquare"><�G�`X$�
*c��H�foursquare
				W�	��֩���������6�f��7Y�V0�=���<Y���NΏ6 class="icon fa 0�Y�o3V� r����t�Z�P,����	e.Nw�				free-code-ca�_H�eݍ�r��[2����гV�tX�Z���7��r8;�x2�n��|7��������~��y���!��JXd��֯��#�����ޥf��!5��/V3m�w�Q�text-muted">(ali�G�+�?Z`��G�Ś *�lY\$��A����X饮�5R�ea��׍�UE=Zs~f�T�m|�6X�:V4�0��Ct���xu��<W[��z@�G��O��os/�@V��X���<��@R��;
~�:&vp���~o,Ȫ���<�>럃�Y	'�̿��H�REP-?PG� class="icon fa <-�q��N�T��/,��u���&M�q 5a�>�zX�_���"��3s����~$I[Gao�����&�AT&c�,��)�K�|��']{��9��gY6�P/�y{�@�@Iz��$�N��fܪ�g-circle
						</div>
						<dmz����	�ɣ�o<U��/��y<�<)��t�lass="icon fa fa�!���鼣r�Z�������������&�OH��S�E42�xI����|��%�V�<�]���s��~�в��j��>� class="icon fa o��:��Ԇ��o8�Z35�j9�C·(=���b;A8Q�9X�X�ןI#�&��X'z��ʹ0�|�QVr#�?I �\c�y�#G�
G޵���H+eQ�2a�t class="icon fa wI����q}7ԩS��br>
							gith���̈����x�㑭��]h4�g�z���>���9�y: _^&�5��`0�\C{���: �ݿ2����s��Adj�pI�HF�˯hy�Y
V���Y*<���*M**oN��n��� g�wŶ�&w$�-{s_��4����9���dp~y�5+��	h�+���튙d�b��h*Z���/M�Ƞ�j�܈�-�w~&5 �r>
							githun#K�<�v���y���hSr����	�Jjiv class="iconDi]���l��x�?b��lass="icon fa fa��Я��@�v��8�y�nfgs��^�%u/�M�GsбƗ:�4�x-�W�$�>����^�rh���="iconDiv">
							<i class="icon fa fa-gittip"></i><br>
							gittip <span class="text-muted">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-glide"></i><br>
							glide
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-glide-g"></i><br>
							glide-g
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-google"></i><br>
							google
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-google-plus"></i><br>
							google-plus
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-google-plus-circle"></i><br>
							google-plus-circle <span class="text-muted">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-google-plus-official"></i><br>
							google-plus-official
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-google-plus-square"></i><br>
							google-plus-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-google-wallet"></i><br>
							google-wallet
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-gratipay"></i><br>
							gratipay
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-grav"></i><br>
							grav
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-hacker-news"></i><br>
							hacker-news
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-houzz"></i><br>
							houzz
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-html5"></i><br>
							html5
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-imdb"></i><br>
							imdb
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-instagram"></i><br>
							instagram
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-internet-explorer"></i><br>
							internet-explorer
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-ioxhost"></i><br>
							ioxhost
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-joomla"></i><br>
							joomla
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-jsfiddle"></i><br>
							jsfiddle
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-lastfm"></i><br>
							lastfm
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-lastfm-square"></i><br>
							lastfm-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-leanpub"></i><br>
							leanpub
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-linkedin"></i><br>
							linkedin
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-linkedin-square"></i><br>
							linkedin-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-linode"></i><br>
							linode
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-linux"></i><br>
							linux
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-maxcdn"></i><br>
							maxcdn
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-meanpath"></i><br>
							meanpath
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-medium"></i><br>
							medium
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-meetup"></i><br>
							meetup
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-mixcloud"></i><br>
							mixcloud
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-modx"></i><br>
							modx
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-odnoklassniki"></i><br>
							odnoklassniki
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-odnoklassniki-square"></i><br>
							odnoklassniki-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-opencart"></i><br>
							opencart
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-openid"></i><br>
							openid
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-opera"></i><br>
							opera
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-optin-monster"></i><br>
							optin-monster
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-pagelines"></i><br>
							pagelines
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-paypal"></i><br>
							paypal
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-pied-piper"></i><br>
							pied-piper
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-pied-piper-alt"></i><br>
							pied-piper-alt
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-pied-piper-pp"></i><br>
							pied-piper-pp
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-pinterest"></i><br>
							pinterest
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-pinterest-p"></i><br>
							pinterest-p
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-pinterest-square"></i><br>
							pinterest-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-product-hunt"></i><br>
							product-hunt
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-qq"></i><br>
							qq
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-quora"></i><br>
							quora
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-ra"></i><br>
							ra <span class="text-muted">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-ravelry"></i><br>
							ravelry
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-rebel"></i><br>
							rebel
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-reddit"></i><br>
							reddit
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-reddit-alien"></i><br>
							reddit-alien
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-reddit-square"></i><br>
							reddit-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-renren"></i><br>
							renren
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-resistance"></i><br>
							resistance <span class="text-muted">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-safari"></i><br>
							safari
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-scribd"></i><br>
							scribd
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-sellsy"></i><br>
							sellsy
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-share-alt"></i><br>
							share-alt
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-share-alt-square"></i><br>
							share-alt-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-shirtsinbulk"></i><br>
							shirtsinbulk
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-simplybuilt"></i><br>
							simplybuilt
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-skyatlas"></i><br>
							skyatlas
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-skype"></i><br>
							skype
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-slack"></i><br>
							slack
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-slideshare"></i><br>
							slideshare
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-snapchat"></i><br>
							snapchat
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-snapchat-ghost"></i><br>
							snapchat-ghost
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-snapchat-square"></i><br>
							snapchat-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-soundcloud"></i><br>
							soundcloud
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-spotify"></i><br>
							spotify
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-stack-exchange"></i><br>
							stack-exchange
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-stack-overflow"></i><br>
							stack-overflow
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-steam"></i><br>
							steam
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-steam-square"></i><br>
							steam-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-stumbleupon"></i><br>
							stumbleupon
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-stumbleupon-circle"></i><br>
							stumbleupon-circle
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-superpowers"></i><br>
							superpowers
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-telegram"></i><br>
							telegram
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-tencent-weibo"></i><br>
							tencent-weibo
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-themeisle"></i><br>
							themeisle
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-trello"></i><br>
							trello
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-tripadvisor"></i><br>
							tripadvisor
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-tumblr"></i><br>
							tumblr
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-tumblr-square"></i><br>
							tumblr-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-twitch"></i><br>
							twitch
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-twitter"></i><br>
							twitter
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-twitter-square"></i><br>
							twitter-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-usb"></i><br>
							usb
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-viacoin"></i><br>
							viacoin
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-viadeo"></i><br>
							viadeo
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-viadeo-square"></i><br>
							viadeo-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-vimeo"></i><br>
							vimeo
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-vimeo-square"></i><br>
							vimeo-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-vine"></i><br>
							vine
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-vk"></i><br>
							vk
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-wechat"></i><br>
							wechat <span class="text-muted">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-weibo"></i><br>
							weibo
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-weixin"></i><br>
							weixin
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-whatsapp"></i><br>
							whatsapp
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-wikipedia-w"></i><br>
							wikipedia-w
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-windows"></i><br>
							windows
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-wordpress"></i><br>
							wordpress
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-wpbeginner"></i><br>
							wpbeginner
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-wpexplorer"></i><br>
							wpexplorer
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-wpforms"></i><br>
							wpforms
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-xing"></i><br>
							xing
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-xing-square"></i><br>
							xing-square
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-y-combinator"></i><br>
							y-combinator
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-y-combinator-square"></i><br>
							y-combinator-square <span class="text-muted">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-yahoo"></i><br>
							yahoo
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-yc"></i><br>
							yc <span class="text-muted">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-yc-square"></i><br>
							yc-square <span class="text-muted">(alias)</span>
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-yelp"></i><br>
							yelp
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-yoast"></i><br>
							yoast
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-youtube"></i><br>
							youtube
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-youtube-play"></i><br>
							youtube-play
						</div>
						<div class="iconDiv">
							<i class="icon fa fa-youtube-square"></i><br>
							youtube-square
						</div>
					</div><br>
					<br>
				</section>
		</div>
		<?php include($baseURL."footer.php")?>

	</body>
</html>
