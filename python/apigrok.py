from groq import Groq

# Tu API Key
API_KEY = ""

# Inicializar cliente
client = Groq(api_key=API_KEY)

# El modelo más potente disponible
MODELO = "openai/gpt-oss-120b"

def consultar_groq(pregunta):
    """Consulta a Groq con el modelo GPT-OSS-120B"""
    try:
        response = client.chat.completions.create(
            messages=[
                {"role": "system", "content": "Eres un experto en contratación pública colombiana. Respondes con precisión y basado en la información proporcionada."},
                {"role": "user", "content": pregunta}
            ],
            model=MODELO,
            temperature=0.2,
            max_tokens=2000
        )
        return response.choices[0].message.content
    except Exception as e:
        return f"Error: {e}"

# === PROBAR ===
if __name__ == "__main__":
    pregunta = "¿Cuáles son los requisitos para participar en una licitación pública en Colombia?"
    respuesta = consultar_groq(pregunta)
    print("="*50)
    print("RESPUESTA:")
    print("="*50)
    print(respuesta)