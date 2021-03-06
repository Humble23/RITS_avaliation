import client from "@/api/client";


export async function register({ name, email, phone, motivation, linkedin_link, github_link, english_level, salary, curriculum }) {
    let data = new FormData();
    
    name && data.append("name", name);
    email && data.append("email", email);
    phone && data.append("phone", phone);
    motivation && data.append("motivation", motivation);
    linkedin_link && data.append("linkedin_link", linkedin_link);
    github_link && data.append("github_link", github_link);
    english_level && data.append("english_level", english_level);
    salary && data.append("salary", salary);
    curriculum && data.append("curriculum", curriculum);
    return await client.post("/candidate/register", data, { headers: { "Content-Type": "multipart/form-data" } });
}