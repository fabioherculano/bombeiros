--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: pessoas; Type: TABLE; Schema: public; Owner: pandamaldito; Tablespace: 
--

CREATE TABLE pessoas (
    nome character(100),
    nasc date,
    cpf character(15),
    id integer NOT NULL,
    fundamental boolean,
    medio boolean,
    superior boolean,
    sexo boolean
);


ALTER TABLE public.pessoas OWNER TO pandamaldito;

--
-- Name: pessoas_id_seq; Type: SEQUENCE; Schema: public; Owner: pandamaldito
--

CREATE SEQUENCE pessoas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.pessoas_id_seq OWNER TO pandamaldito;

--
-- Name: pessoas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pandamaldito
--

ALTER SEQUENCE pessoas_id_seq OWNED BY pessoas.id;


--
-- Name: pessoas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pandamaldito
--

SELECT pg_catalog.setval('pessoas_id_seq', 77, true);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: pandamaldito
--

ALTER TABLE ONLY pessoas ALTER COLUMN id SET DEFAULT nextval('pessoas_id_seq'::regclass);


--
-- Data for Name: pessoas; Type: TABLE DATA; Schema: public; Owner: pandamaldito
--

COPY pessoas (nome, nasc, cpf, id, fundamental, medio, superior, sexo) FROM stdin;
Cinara com C                                                                                        	1972-01-02	124.561.231-22 	68	t	t	t	f
Vam damme                                                                                           	1950-12-13	666.555.444-78 	69	t	t	f	t
Fabio Herculano dos Santos                                                                          	1978-05-31	021.650.869-06 	67	t	t	f	t
Silverter Stallone                                                                                  	1950-01-25	222.333.444-55 	74	t	t	f	t
Kurt Cobain                                                                                         	1969-05-14	123.456.789-99 	76	t	t	f	t
Gaudencio Bagual                                                                                    	1987-12-12	021.548.795-8  	77	t	t	t	t
Angelina Jolie                                                                                      	1970-08-12	656.565.656-65 	75	t	t	t	f
Bruce Lee                                                                                           	1945-04-12	131.313.131-31 	73	t	f	f	t
\.


--
-- Name: pessoas; Type: ACL; Schema: public; Owner: pandamaldito
--

REVOKE ALL ON TABLE pessoas FROM PUBLIC;
REVOKE ALL ON TABLE pessoas FROM pandamaldito;
GRANT ALL ON TABLE pessoas TO pandamaldito;
GRANT ALL ON TABLE pessoas TO pandamal_bombeiros;


--
-- PostgreSQL database dump complete
--

