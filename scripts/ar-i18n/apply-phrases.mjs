import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '../..');

/** Longest-first replacements for copied EN/IT lander copy. */
const PAIRS = [
  ["You're already registered", 'أنت مسجّل بالفعل'],
  ['You are already registered', 'أنت مسجّل بالفعل'],
  ['Your request with', 'تم استلام طلبك لدى'],
  ['has been received. Please wait for a call from our adviser.', 'يرجى انتظار اتصال من مستشارنا.'],
  ['Please fill in all required fields correctly.', 'يرجى تعبئة جميع الحقول المطلوبة بشكل صحيح.'],
  ['Enter a valid phone number', 'أدخل رقم هاتف صالحاً'],
  ['Invalid country code', 'رمز الدولة غير صالح'],
  ['The phone number is too short', 'رقم الهاتف قصير جداً'],
  ['The phone number is too long', 'رقم الهاتف طويل جداً'],
  ['Enter your phone number', 'أدخل رقم هاتفك'],
  ['Session expired. Please reload the page and try again.', 'انتهت الجلسة. يرجى إعادة تحميل الصفحة والمحاولة مرة أخرى.'],
  ['Something went wrong. Please try again later.', 'حدث خطأ. يرجى المحاولة لاحقاً.'],
  ['Connection error. Check your internet connection and try again.', 'خطأ في الاتصال. تحقق من الإنترنت وحاول مرة أخرى.'],
  ['By submitting your details you accept the', 'بإرسال بياناتك فإنك توافق على'],
  ['Privacy notice', 'إشعار الخصوصية'],
  ['Terms of use', 'شروط الاستخدام'],
  ['Terms of Service', 'شروط الخدمة'],
  ['Request access', 'اطلب الوصول'],
  ['Start now', 'ابدأ الآن'],
  ['Start free', 'ابدأ مجاناً'],
  ['First name', 'الاسم الأول'],
  ['Last name', 'اسم العائلة'],
  ['Page not found', 'الصفحة غير موجودة'],
  ['Cookie notice', 'إشعار ملفات الارتباط'],
  ['Frequently asked questions', 'الأسئلة الشائعة'],
  ['Thank you', 'شكراً لك'],
  ['Sei già registrato', 'أنت مسجّل بالفعل'],
  ['Cognome', 'اسم العائلة'],
  ['Telefono', 'الهاتف'],
  ['Inizia ora', 'ابدأ الآن'],
  ['Chi siamo', 'من نحن'],
  ['>Email</label>', '>البريد الإلكتروني</label>'],
  ['placeholder="Email"', 'placeholder="البريد الإلكتروني"'],
  ['>Phone</label>', '>الهاتف</label>'],
  ['placeholder="Phone"', 'placeholder="الهاتف"'],
  ['>Nome</label>', '>الاسم الأول</label>'],
  ['placeholder="Nome"', 'placeholder="الاسم الأول"'],
  ['>Cognome</label>', '>اسم العائلة</label>'],
  ['placeholder="Cognome"', 'placeholder="اسم العائلة"'],
  ['>Telefono</label>', '>الهاتف</label>'],
  ['placeholder="Telefono"', 'placeholder="الهاتف"'],
];

function walk(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(p, out);
    else out.push(p);
  }
  return out;
}

let files = 0;
let hits = 0;
for (const file of walk(path.join(ROOT, 'templates'))) {
  const isArPack = file.includes(`${path.sep}langs${path.sep}ar${path.sep}`);
  const isVesperaAr = file.endsWith(`${path.sep}vespera${path.sep}lang${path.sep}ar.php`);
  if (!isArPack && !isVesperaAr) continue;
  if (!/\.(php|js)$/.test(file)) continue;
  if (file.includes(`${path.sep}integration${path.sep}`) && !file.endsWith('validation.js')) continue;
  let s = fs.readFileSync(file, 'utf8');
  const orig = s;
  for (const [from, to] of PAIRS) {
    if (s.includes(from)) {
      s = s.split(from).join(to);
      hits++;
    }
  }
  if (s !== orig) {
    fs.writeFileSync(file, s);
    files++;
  }
}
console.log(`phrase files=${files} hits=${hits}`);
