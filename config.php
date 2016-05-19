<?php
/* 
* The Simple CMS (c) Xlopez
* Config-file
*/

############################################
//�������� ���
ini_set( "display_errors", true );

//���������� ������ �� ����� ������
define( "SHOW_ADMINLINK", true);

//��������� ���� http://www.php.net/manual/en/timezones.php
date_default_timezone_set( "Australia/Sydney" );

//��������� �� 
define( "DB_DSN", "mysql:host=localhost;dbname=db" ); //��� ���� ������ � ����. ������� � ����� �������: mysql:host=��� ����;dbname=��� ��� ���� ������
define( "DB_USERNAME", "root" ); //����� ������������ ��
define( "DB_PASSWORD", "" ); //������ ������������ ��

//�������� ������
define( "CLASS_PATH", "classes" ); //���� � ��������
define( "TEMPLATE_PATH", "templates" ); //���� � ��������

//������������ ���������� ������� �� �������
define( "HOMEPAGE_NUM_ARTICLES", 5 );

//��������� ������������ ���������
define( "VK_APIID", 0000000); //ApiId ���������� ��������� ��� ������������
define( "VK_MAX", 10); //������������ ���������� ������������ �� ��������
define( "VK_WIDTH", 665); //������ ����� ������������

//��� �����
define( "SITE_NAME", "Boot-Up");

//��������� ����� ��������
define( "ADMIN_USERNAME", "admin" ); //����� ������
define( "ADMIN_PASSWORD", "admin" ); //������ ������
############################################

// ���� �� ���������� - ��� �� �������!
require( CLASS_PATH . "/Article.php" ); // ���������� ����� ��� ������ � ��������
require( CLASS_PATH . "/Category.php" ); // ���������� ����� ��� ������ � ����������� 

// � ��� ����!
function handleException( $exception ) {
  include TEMPLATE_PATH . "/include/header.php";
  echo "<div class='alert alert-danger'> <strong>Error!</strong> When load page error detected: " . $exception->getMessage() . "</div>";
  error_log( $exception->getMessage() );
  include TEMPLATE_PATH . "/include/footer.php";
}

// � ���!!
set_exception_handler( 'handleException' );
?>
