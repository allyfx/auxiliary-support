import { Router } from 'express';

const router = Router();

router.get('/', (req, res) => {
  return res.status(200).json({
    message: 'OK',
  });
});

router.get('/rota1', (req, res) => {
  return res.render('./pages/rota1.html');
});

router.get('/rota2', (req, res) => {
  return res.render('./pages/rota2.html');
});

router.get('/rota3', (req, res) => {
  return res.render('./pages/rota3.html');
});
