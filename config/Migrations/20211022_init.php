<?php
use Migrations\AbstractMigration;

class Init extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->execute('
            BEGIN;

            CREATE TABLE IF NOT EXISTS public.jour_journal
            (
                jour_codigo bigserial NOT NULL,
                jour_model character varying(100) NOT NULL,
                jour_model_codigo bigint NOT NULL,
                jour_json_data json NOT NULL,
                jour_created timestamp with time zone NOT NULL,
                jour_usua_codigo bigint NOT NULL,
                jour_empr_codigo bigint NOT NULL,
                PRIMARY KEY (jour_codigo)
            );
            
            CREATE TABLE IF NOT EXISTS public.jdet_journal_detail
            (
                jdet_codigo bigserial NOT NULL,
                jdet_jour_codigo bigint NOT NULL,
                jdet_property character varying(100) NOT NULL,
                jdet_prop_key character varying(100) NOT NULL,
                jdet_old_value text NOT NULL,
                jdet_value text NOT NULL,
                PRIMARY KEY (jdet_codigo)
            );

            CREATE TABLE "clie_cliente"  ( 
                "clie_codigo"      	bigserial NOT NULL,
                "clie_documento"   	varchar(14) NOT NULL,
                "clie_razao_social"	varchar(60) NOT NULL,
                "clie_token"       	varchar(512) NULL,
                "clie_created"     	timestamp NOT NULL,
                "clie_modified"    	timestamp NULL,
                "clie_deleted"     	timestamp NULL,
                PRIMARY KEY("clie_codigo"),
                UNIQUE(clie_documento)
            );

            CREATE TABLE "usua_usuario"  ( 
                "usua_codigo"     	bigserial NOT NULL,
                "usua_clie_codigo"	bigint NOT NULL,
                "usua_email"      	varchar(128) NOT NULL,
                "usua_senha"      	varchar(255) NOT NULL,
                "usua_nome"       	varchar(60) NOT NULL,
                "usua_created"    	timestamp NOT NULL,
                "usua_modified"   	timestamp NULL,
                "usua_deleted"    	timestamp NULL,
                PRIMARY KEY("usua_codigo"),
                UNIQUE(usua_email)
            );

            ALTER TABLE public.jdet_journal_detail
                ADD FOREIGN KEY (jdet_jour_codigo)
                REFERENCES public.jour_journal (jour_codigo)
                NOT VALID;
            
            ALTER TABLE "usua_usuario"
                ADD CONSTRAINT "usua_clie"
                FOREIGN KEY("usua_clie_codigo")
                REFERENCES "clie_cliente"("clie_codigo")
                ON DELETE NO ACTION 
                ON UPDATE NO ACTION;
            
            COMMIT;
        ');

    }

    public function down()
    {
        $this->execute('
            DROP TABLE IF EXISTS public.usua_usuario CASCADE;
            DROP TABLE IF EXISTS public.clie_cliente CASCADE;
            DROP TABLE IF EXISTS public.jdet_journal_detail CASCADE;
            DROP TABLE IF EXISTS public.jour_journal CASCADE;            
        ');
    }
}
