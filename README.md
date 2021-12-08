# proyecto-tolerante-fallas

Somos un equipo que plantea conocer a fondo el desarrollo de los microservicios porducidos con apliccion y con sus utilidades en la actualidad como lo es docker o kubernetes
para esto los primeros pasos son el crear imagenes y desarrollar contenedores con los servicios que necesitaremos.

Como cluster decidimos utilizar uuno local como lo es minikube el cual se puede instalar mediante su documentacion. https://kubernetes.io/es/docs/tasks/tools/install-kubectl/

Una vez instalado el cluster su manera de inicializarlos es mediante el comando "minikube start --driver=docker --force" este comando nos ayudo a poder inicializarlo en lo que es docker, el comando creara las configuraciones necesarias para poder montar el cluster.

![image](https://user-images.githubusercontent.com/81650365/145135834-f7543bad-d79e-488d-8103-149257167683.png)

Una vez instalado el cluster ya solo quedaria crear el dockerfile con la imagen que usaremos en nuestro deployment.

Como podemos observar es necesario tener una cuenta en lo que es docker ya que sera ahi donde subiremos el proyecto creado.

![image](https://user-images.githubusercontent.com/81650365/145136695-51f21328-99a0-4cd6-8425-5a5c8f094173.png)

Con ese repositorio en docker podremos crear lo que son los archivos .yaml

![image](https://user-images.githubusercontent.com/81650365/145137659-f774e48a-1b0a-4d9f-9f21-164fbf8ef99b.png)

De esta forma creamos los servicios necesario que se muestran en el github de los archivos .yaml.

Ya teniendo los archivos solamente es necesario crear los pods necesarios con el comando "kubectl apply -f mysql-deployment.yaml -n proyecto" donde el archivo .yaml es nuestro propio archivo y el -n "nombre" es nuestro namespaces.

Una vez creado los archivos pods lo necesario es revisar los servicios y la misma ip que nos podra mostrar nuestro programa.

![captura 1](https://user-images.githubusercontent.com/81650365/145157634-72909b82-3f2a-4cce-8fa7-d48a3995c95f.png)

Ahi se muestran los pods ya creados de nuestra aplicacion.

Para poder obtener la ip de nuestros servicios ya usamos el comando "minikube service list"

![captura 2](https://user-images.githubusercontent.com/81650365/145157656-9d494e49-d2a6-42c8-8d8a-c4eb3f634cc8.png)

Ya con esto podemos observar lo que es la aplicacion.

![captura 3](https://user-images.githubusercontent.com/81650365/145157767-8335665d-a86e-499e-ad22-ec245c348c9d.png)

Con esto ya podemos observar que nuestra aplicacion esta montada en kubernetes. 

Pero a demas de eso podemos observar como son los microservicios mediante la aplicacion que se puede instalar en nuestro cluster llamada istio.

Ya dentro podemos visualizarlo con el comando istio dashboard kiali ya que  kiali es su interfaz y se puede observar lo que es el trafico, es necesario tener un buen equipo ya que consume muchos recursos.

![image](https://user-images.githubusercontent.com/81650365/145272895-5e533aaf-69bb-4420-b573-4a00803ad0d4.png)

Ya solo quedaria revisar los grafos en los cuales podemos observar que trafico se pasa mediate la red, esto es de mucha ayuda debido a que sabes que micro servicios se usan y puedes controlar la carga de trabajo con mas microservicio.

![image](https://user-images.githubusercontent.com/81650365/145273948-afb89a30-a663-4c4f-928d-543de77fc334.png)


