use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nome', 100);
            $table->string('email_institucional', 100)->unique();
            $table->string('matricula', 20)->unique()->nullable();
            $table->string('senha');
            $table->enum('tipo_usuario', ['aluno', 'docente', 'tecnico-administrativo']);
            $table->string('curso', 100)->nullable();
            $table->string('turma', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
