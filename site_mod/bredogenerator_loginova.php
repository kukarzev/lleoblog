<?php

// (c) ������� ���� - ��������� �������

function bredogenerator_loginova($e) {

$conf=array_merge(array(
'a'=>"� �� �� �����
������������, ���
�����������,
���������, ���
�������������,
� ����� ��������� �������
�������, ���
� ��������� �������
����,
� ������ �������,
��������, ���
�������� �� ��������, ���
��� ������� ��������,
����� ������, ���
� ������������ ����� ������
���� ������������� �� ������������ ����,
��� �������� ��������� �������,
�� ��� ���� �� ������, ���
���� ������:
������� ������ ������ ����:",

'b'=>"���� ���� ���������
���������� �������������� ������ ����������
���������� ��������� ����� ���������
����������� ������������� ���������
������������� ������������ ����������������
������������������ ������������� �������
��������� ��������� �������� ������������ � �������������
��������� �������� �����
����� ����� �������� ����������
���������������� ���������� �������
���� ������������� ������������ � ��������
������������� ������ � ����������
����������� ��������� � ���������� �����
�������� � ������������ �������� ������� ���������
�������������� � ��������� ������ � ����-�����
���������� ���� ��������� ������������
������������ ���������� � ������� �������������� ��������
���������� ������������ �������
������������� ������� �� ���������� ������������ ������������� �� �������� �������
������� ���������� ���������� ������",

'c'=>"���������� ������������� �������� � �������
��������� ����� �����������
� ������ ������� ���������� ����
�������� ����� ������� �������
��������� ��������� ��������������� ���������
������� ����������� � �������������
������ ���������� ����� ��������� ��������������
������������ ������������ ���� ����������� � �������
�������� ��� ���� ������������� � ����������
�������� ������������ ��������� ��� �������
����������� ������ � ������ ������� ����
������ ���������� �������� ����������
������ ���������� � �������� � �������
�������� �������� �������������� � �����������
���� ����� �������������� ��������
� ��������� � ���������� ��������� ������������ �������
��������� ��� ������������ ����������� ����
���� ����������� ��� ��������
��������� ���������� ����� ����
������������� ��������� �����������",

'd'=>"���������� �������������� ��������� ����������.
������ ������� � ������ ����������.
���� �� ���������� ���������� �������� �������.
�������� ���������� ������ ���������.
�������� ����������� ��������� ��������������� ���������. 
����� ������������ ������������� �����������.
������ ������� ������ �� �������� � ����� ��������� �������.
�������� ����������� ��������� �� ���� ������� �����������.
�������� ��������� ����������� ������� � ������� ������ ������.
��������������� �������� �� �������� ������.
����������� ������ � ����������� ��������� �����������.
�������� � ������������� ������� ����������.
��������� ������� �������� ����������.
������������ ����������� ���������.
����������� ������ ��������� ���������.
������������ ��������� ���� �� ���� ����������.
����������� ��������������� ������� ������� ����� � ���.
�������������� ��������������� ��������.
���������� ��������������� �� �������� ������.
����� ���������� ����� �������.",

'abz_from'=>3,
'abz_to'=>10,

'fraz_from'=>2,
'fraz_to'=>15

),parse_e_conf($e));

$a=explode("\n",strtr($conf['a'],'|',"\n"));
$b=explode("\n",strtr($conf['b'],'|',"\n"));
$c=explode("\n",strtr($conf['c'],'|',"\n"));
$d=explode("\n",strtr($conf['d'],'|',"\n"));

for($p=rand($conf['abz_from'],$conf['abz_to']),$o='',$j=1;$j<=$p;$j++) // �� 3 �� 10 �������
for($k=rand($conf['fraz_from'],$conf['fraz_to']),$o.='<p class=d>',$i=1;$i<=$k;$i++) // �� 2-15 ����
$o .= $a[rand(0,sizeof($a)-1)]." ".$b[rand(0,sizeof($b)-1)]." ".$c[rand(0,sizeof($c)-1)]." ".$d[rand(0,sizeof($d)-1)]." ";

return $o;

}
?>