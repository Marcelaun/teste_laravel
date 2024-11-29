use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntasTable extends Migration
{
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->id('id_pergunta');
            $table->unsignedBigInteger('id_avaliacao');
            $table->text('texto_pergunta');
            $table->enum('tipo_resposta', ['multipla_escolha', 'texto', 'numerica']);
            $table->foreign('id_avaliacao')->references('id_avaliacao')->on('avaliacoes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
}